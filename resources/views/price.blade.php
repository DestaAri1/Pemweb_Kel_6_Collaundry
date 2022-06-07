<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
  
    <section id="harga" class="pricing">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
          <header class="panel-heading">
            <h1>List Kategori</h1>
          </header>
          <table class="table table-hover">
            <head>
              <th>Kategori</th>
              <th>Nama</th>
              <th>Harga</th>
            </head>
            @foreach ($produk as $p)
                <tr>
                  <td>{{ $p->nama_kategori }}</td>
                  <td>{{ $p->nama }}</td>
                  <td>Rp.{{ $p->harga }}</td>
                </tr>
            @endforeach
          </table>
          </div>
        </div>
    </section>

@endsection