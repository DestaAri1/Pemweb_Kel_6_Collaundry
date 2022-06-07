@extends('admin.master')

@section('konten')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Kategori</h1>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h5 mb-0 text-gray-800">
        <button class="btn btn-success" data-toggle="modal" data-target="#tambah_kategori">Tambah Kategori</button>
    </h1>
</div>

    <div class="container-fluid">
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
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
                            <th width="10px">No</th>
                            <th width="500px">Nama Kategori</th>
                            <th width="100px">&nbsp;</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th width="70px">No</th>
                            <th width="130px">Nama Kategori</th>
                            <th width="100px">&nbsp;</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            $no=1;
                            ?>
                        @foreach ($kategori as $k)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$k->nama_kategori}}</td>
                            <td>
                                <form action="{{ route('kategori.destroy', $k->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('delete') }}
                                    <button name="submit" type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>


    <div class="modal fade bd-example-modal-lg" id="tambah_kategori" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Kategori</label>
                        <input name="nama_kategori" id="nama_kategori" type="text" class="form-control" placeholder="Masukkan Kategori" require>
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