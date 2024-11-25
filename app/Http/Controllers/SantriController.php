<?php

namespace App\Http\Controllers;


use App\Models\SantriModel3;
use Illuminate\Http\Request;



class SantriController extends Controller
{
    public function tampilsantri()
    {
       $santri = SantriModel3::select('*')
                 ->get();
       return view('tampilsantri', ['santri' => $santri]);
    }
    public function tambahsantri()
    {
        return view('tambahsantri');
    }

    public function simpanSantri(Request $request)
    {
        $santri = SantriModel3::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
        ]);

        return redirect()->route('tampilsantri');
    }

    public function ubahsantri($id)
{
   $santri = SantriModel3::select('*')
             ->where('id', $id)
             ->get();

   return view('ubahsantri', ['santri' => $santri]);
}

public function updatesantri(Request $request)
{
   $santri = SantriModel3::where('id', $request->id)
             ->update([
                    'nama' => $request->nama,
                    'jenis' => $request->jenis,
                    'harga' => $request->harga,
             ]);

   return redirect()->route('tampilsantri');
}

public function hapussantri($id)
{
    $santri = SantriModel3::where('id', $id)
              ->delete();

    return redirect()->route('tampilsantri');
}

}
