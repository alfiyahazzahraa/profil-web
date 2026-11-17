<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function kirimKontak(Request $request)
    {
        $request->validate([
            'nama'  => 'required|string|max:100',
            'email' => 'required|email',
            'pesan' => 'required|string|min:10',
        ]);

        // Sementara belum disimpan ke mana-mana, nanti kita lanjutkan
        return redirect()->route('kontak')
            ->with('sukses', 'Terima kasih! Pesanmu sudah kami terima.');
    }
}