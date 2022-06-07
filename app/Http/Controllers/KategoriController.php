<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    public function store(Request $request)
    {
        $kategori = new Kategori();
        $cek_kategori = Kategori::where('nama_kategori', $request->nama_kategori)->first();
        if($cek_kategori)
        {
            return back()->with('error', 'Data Sudah Ada');
        }
        else
        {
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->save();
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        }
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        if ($kategori->delete()) {
            return back()->with('success', 'Data Berhasil Dihapus');
        } else {
            return back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
