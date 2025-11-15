<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use App\Models\Category;
use App\Models\UmkmPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class UmkmController extends Controller
{
    /* -------------------------------------------------------
    | PUBLIC PAGES (USER)
    --------------------------------------------------------*/
    public function index(Request $request)
    {
        $lat = $request->query('lat');
        $lng = $request->query('lng');

        $umkms = Umkm::with('category')->paginate(12);

        // Tambahkan jarak jika diperlukan
        /** @var \App\Models\Umkm $u */
        foreach ($umkms as $u) {
            $u->distance = $u->distanceFrom($lat, $lng);
        }

        return view('admin.index', compact('umkms'));
    }

    public function show($id)
    {
        $umkm = Umkm::with(['photos', 'category'])->findOrFail($id);
        return view('mainpage.section-page.detail-umkm', compact('umkm'));
    }


    /* -------------------------------------------------------
    | ADMIN PAGES
    --------------------------------------------------------*/
    public function adminIndex()
    {
        $umkms = Umkm::with('category')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.index', compact('umkms'));
    }

    public function create()
    {
        $categories = Category::all(); // ambil semua kategori
        return view('admin.create', compact('categories'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:255',
            'about' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'primary_photo' => 'required|image|max:5120',
            'gallery.*'  => 'nullable|image|max:5120',
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'instagram' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'open_days' => 'nullable|string',
            'open_hours' => 'nullable|string',
        ]);


        // Buat slug unik
        $slugBase = Str::slug($data['name']);
        $slug = $slugBase;
        $counter = 1;
        while (Umkm::where('slug', $slug)->exists()) {
            $slug = $slugBase . '-' . $counter;
            $counter++;
        }
        $data['slug'] = $slug;

        // Upload primary photo
        if ($request->hasFile('primary_photo')) {
            $data['primary_photo'] = $request->file('primary_photo')
                ->store('umkm/photos', 'public');
        }

        $umkm = Umkm::create($data);

        // Upload gallery photos
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                UmkmPhoto::create([
                    'umkm_id' => $umkm->id,
                    'photo' => $file->store('umkm/photos', 'public'),
                ]);
            }
        }

        return redirect()->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $umkm = Umkm::with('photos')->findOrFail($id);
        $categories = Category::all();
        return view('admin.edit', compact('umkm', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $umkm = Umkm::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'short_description' => 'nullable|string|max:255',
            'about' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'primary_photo' => 'required|image|max:5120',
            'gallery.*'  => 'nullable|image|max:5120',
            'alamat' => 'required|string',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'instagram' => 'nullable|string',
            'whatsapp' => 'nullable|string',
            'open_days' => 'nullable|string',
            'open_hours' => 'nullable|string',
        ]);



        // Ganti primary photo jika ada
        if ($request->hasFile('primary_photo')) {
            if ($umkm->primary_photo && Storage::disk('public')->exists($umkm->primary_photo)) {
                Storage::disk('public')->delete($umkm->primary_photo);
            }
            $data['primary_photo'] = $request->file('primary_photo')
                ->store('umkm/photos', 'public');
        }

        $umkm->update($data);

        // Upload gallery baru
        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $file) {
                UmkmPhoto::create([
                    'umkm_id' => $umkm->id,
                    'photo' => $file->store('umkm/photos', 'public'),
                ]);
            }
        }

        return redirect()->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $umkm = Umkm::with('photos')->findOrFail($id);

        // Hapus primary photo dari storage
        if ($umkm->primary_photo && Storage::disk('public')->exists($umkm->primary_photo)) {
            Storage::disk('public')->delete($umkm->primary_photo);
        }

        // Hapus gallery photos dari storage
        foreach ($umkm->photos as $photo) {
            if (Storage::disk('public')->exists($photo->photo)) {
                Storage::disk('public')->delete($photo->photo);
            }
        }

        // Hapus UMKM beserta relasi photos (cascade)
        $umkm->delete();

        return redirect()->route('admin.umkm.index')
            ->with('success', 'UMKM berhasil dihapus!');
    }

    /* -------------------------------------------------------
    | FRONTEND PAGES
    --------------------------------------------------------*/
    public function homepage()
    {
        $umkms = Umkm::with('category')->get();
        return view('mainpage.index', compact('umkms'));
    }

    public function direktori()
    {
        $umkms = Umkm::all();
        return view('mainpage.section-page.direktori-umkm', compact('umkms'));
    }
}
