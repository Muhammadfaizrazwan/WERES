<?php

namespace App\Http\Controllers;


use App\Models\SantriModel3;
use Illuminate\Http\Request;



class SantriController extends Controller
{
    public function tampilsantri()
    {
        return view('tampilsantri');
    }

    public function tambahsantri()
    {
        return view('tambahsantri');
    }

    public function simpanSantri(Request $request)
    {
        $santri = SantriModel3::create([
            'nama_santri' => $request->nama_santri,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('tampilsantri');
    }
}
