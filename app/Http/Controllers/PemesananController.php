<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{

    public function store(Request $request)
    {
        $pemesanan = new Pemesanan();

        $cek_pemesanan = Pemesanan::where('nama', $request->nama)->first();

        if($cek_pemesanan)
        {
            return back()->with('error', 'Sedang Kami Proses');
        }
        else
        {
            $pemesanan->nama = $request->nama;
            $pemesanan->no_tlp = $request->no_tlp;
            $pemesanan->alamat = $request->alamat;
            $pemesanan->save();
            return redirect()->back()->with('success', 'Akan Kami Proses');
        }
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        if ($pemesanan->delete()) {
            return back()->with('success', 'Data Berhasil Dihapus');
        } else {
            return back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
