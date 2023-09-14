<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        // fungsi index
        $data_buku = Buku::all();
        $data_buku_sort = Buku::all()->sortByDesc('id');
        $no = 1;
        $count_data = Buku::count();
        $sum_harga = Buku::sum('harga');

        return view('buku.index', compact('data_buku', 'data_buku_sort', 'no', 'count_data', 'sum_harga'));
    }
}
