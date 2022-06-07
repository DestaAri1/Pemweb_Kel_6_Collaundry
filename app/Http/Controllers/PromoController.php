<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
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
        //
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
        $promo = Promo::findOrFail($id);
        if ($promo->delete()) {
            return back()->with('success', 'Data Berhasil Dihapus');
        } else {
            return back()->with('error', 'Data Gagal Dihapus');
        }
    }
}
