@extends('admin.master')

@section('konten')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pemesanan</h1>
</div>

<div class="container-fluid">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pemesan</h6>
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
                        <th width="130px">Nama Pemesan</th>
                        <th width="100px">No. Telp</th>
                        <th width="300px">Alamat</th>
                        <th width="100px">&nbsp;</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="70px">No</th>
                        <th width="130px">Nama Pemesan</th>
                        <th width="100px">No. Telp</th>
                        <th width="300px">Alamat</th>
                        <th width="100px">&nbsp;</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        $no=1;
                        ?>
                    @foreach ($pemesanan as $p)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{$p->nama}}</td>
                        <td>{{$p->no_tlp}}</td>
                        <td>{{$p->alamat}}</td>
                        <td>
                            <form action="{{ route('pemesanan.destroy', $p->id) }}" method="POST">
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
@endsection