<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::get();
        return view('buku.index', ['buku' => $buku]);
    }

    public function tambah()
    {
        return view('buku.add_form');
    }

    public function submit(Request $request)
    {
        $data =[
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku' => $request->jumlah_buku,
        ];

        Buku::create($data);

        return redirect()->route('buku');
    }

    public function edit($id)
    {
        $buku = Buku::find($id);

        return view('buku.add_form', ['buku' => $buku]);
    }

    public function update($id, Request $request)
    {
        $data =[
            'kode_buku' => $request->kode_buku,
            'judul_buku' => $request->judul_buku,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'jumlah_buku' => $request->jumlah_buku,
        ];

        Buku::find($id)->update($data);

        return redirect()->route('buku');
    }

    public function delete($id)
    {
        Buku::find($id)->delete();

        return redirect()->route('buku');
    }
}
