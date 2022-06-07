<?php

//  UNTUK CONTROLLER ADMIN

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Pemesanan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function promo()
    {
        $promo = Promo::paginate(5);
        return view('admin.promo', compact('promo'));
    }

    public function add_promo(Request $request)
    {
        $promo = new Promo();
        $cek_promo = Promo::where('nama_promo', $request->nama_promo)->first();
        if($cek_promo)
        {
            return back()->with('error', 'Data Sudah Ada');
        }
        else
        {
            $promo->nama_promo = $request->nama_promo;
            $promo->deskripsi = $request->des;
            $promo->harga = $request->harga;
            $promo->tag = $request->tag;
            $promo->save();
            return redirect()->back()->with('success', 'Data Berhasil Ditambahkan');
        }
    }

    public function rekap()
    {
        $pemesanan = Pemesanan::paginate(7);
        return view('admin.rekap', compact('pemesanan'));
    }

    public function kategori()
    {
        $kategori = Kategori::paginate(5);
        return view('admin.kategori', compact('kategori'));
    }

    public function produk()
    {
        $produk = Produk::paginate(5);
        $kategori = Kategori::all();
        return view('admin.produk', compact('produk','kategori'));
    }

    public function displayImage($filename)
    {
        $path = storage_public('images/' . $filename);
        
        if (!File::exists($path))
        {
            abort(404);
        }
        
        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);
        return $response;
    }
}
