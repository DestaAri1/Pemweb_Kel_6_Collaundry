<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Promo;
use App\Models\Kontak;

class BlogController extends Controller
{
    public function home()
    {
		return view('main');
	}

	public function price()
    {
        $produk = Produk::get();
        return view('price', compact('produk'));
	}

	public function service()
    {
		$promo = promo::get();
        return view('service', compact('promo'));
	}

    public function pemesanan()
    {
        return view('pemesanan');
    }

    public function add_pesan(Request $request)
    {
        $kontak = new Kontak();

        $kontak->nama= $request->name;
        $kontak->email = $request->email;
        $kontak->judul = $request->judul;
        $kontak->pesan= $request->pesan;
        $kontak->save();
        return redirect()->back()->with('success', 'Terima Kasih Atas Sarannya');
    }
}
