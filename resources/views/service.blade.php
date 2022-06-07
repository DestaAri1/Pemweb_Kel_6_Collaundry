<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<section id="promo" class="promo">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
        <header class="panel-heading">
          <h1>Promo Bulan Ini</h1>
        </header>
        <table class="table table-hover">
          <head>
            <th>Promo</th>
            <th>Deskripsi</th>
            <th>Harga</th>
          </head>
          @foreach ($promo as $p)
              <tr>
                <td>{{ $p->nama_promo }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>Rp.{{ $p->harga }}</td>
              </tr>
          @endforeach
        </table>
        </div>
      </div>
  </section>


@endsection
