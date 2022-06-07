@extends('admin.master')

@section('konten')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Promo</h1>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h5 mb-0 text-gray-800">
            <button class="btn btn-success" data-toggle="modal" data-target="#tambah_promo">Tambah Promo</button>
        </h1>
    </div>

    <div class="container-fluid">
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Promo</h6>
        </div>
        <div class="card-body">
            @if ($message = Session::get('error'))
                <div class="alert alert-warning">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="70px">No</th>
                            <th width="130px">Nama Promo</th>
                            <th width="300px">Deskripsi</th>
                            <th width="100px">Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;
                        ?>
                        @foreach ($promo as $p)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$p->nama_promo}}</td>
                            <td>{{$p->deskripsi}}</td>
                            <td>Rp. {{$p->harga}}</td>
                            <td>
                                <form action="{{ route('promo.destroy', $p->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button name="submit" type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$promo->links()}}
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="tambah_promo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Promo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addpromo') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Promo</label>
                        <input name="nama_promo" id="nama_promo" type="text" class="form-control" placeholder="Masukkan Promo" require>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="des" id="des" rows="8" class="form-control" require></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input name="harga" id="harga" type="number" class="form-control" placeholder="Masukkan Harga" require>
                    </div>
                    <div class="form-group">
                        <label for="">tag</label>
                        <input name="tag" id="tag" type="text" class="form-control" placeholder="Masukkan Tag" require>
                        <small class="form-text text-muted">Tuliskan 1 kata</small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
