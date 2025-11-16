<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q'); // Ambil query dari input search

        if ($query) {
            // Cari UMKM berdasarkan nama
            $umkms = Umkm::where('name', 'like', "%{$query}%")->get();
        } else {
            // Jika kosong, ambil semua UMKM
            $umkms = Umkm::all();
        }

        return view('mainpage.section-page.search-page', compact('umkms', 'query'));
    }
}
