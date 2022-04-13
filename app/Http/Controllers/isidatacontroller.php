<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;

class isidatacontroller extends Controller
{
    public function store(Request $request) {
        $detail = detail::create([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'suhu_tubuh' => $request->suhutubuh,
            'lokasi' => $request->lokasi,
        ]);
        return back()->with('berhasil', 'Data berhasil disimpan');
    }
    public function create(Request $request) {

    }
}
