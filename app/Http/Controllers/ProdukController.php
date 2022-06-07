<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $produk = new Produk();
        $cek_produk = Produk::where('nama', $request->nama_produk)->first();
        if($cek_produk)
        {
            return back()->with('error', 'Data Sudah Ada');
        }
        else
        {
            $produk->nama_kategori = $request->nama_kategori;
            $produk->nama = $request->nama_produk;
            $produk->harga = $request->harga;
            $produk->save();
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        if ($produk->delete()) {
            return back()->with('success', 'Data Berhasil Dihapus');
        } else {
            return back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
