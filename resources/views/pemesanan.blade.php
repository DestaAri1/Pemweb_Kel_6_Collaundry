<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

<section class="ordering">
    <div class="container" class="align-items-center">
        <div class="card shadow mb-4 ">
            <div class="card-header py-3 mb-lg-3">
                <h6 class="m-0 font-weight-bold text-primary">Pemesanan</h6>
            </div>
            <div class="card-body">
                @if ($message = Session::get('error'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <form action="{{ route('pemesanan.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="" class="form-label">Nama</label>
                      <input type="name" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                      <label for="" class="form-label">No. Telpon</label>
                      <input type="name" id="no_telp" name="no_telp" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="2" class="form-control" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
                  </form>
            </div>
        </div>
    </section>

@endsection
