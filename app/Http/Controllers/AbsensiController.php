<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //

    public function index()
    {
        $data = [

            'title' => "Absensi"
        ];

        return view('Home.index', $data);
    }

    public function store(Request $request)
    {
        # code...
        absensi::create([

            'id_pegawai' => $request->id_pegawai

        ]);

        return redirect()->route('index')->with('berhasil', "Anda Berhasil Absensi");
    }
}
