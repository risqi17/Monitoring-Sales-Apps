
@extends('_layout.front.main')

@section('css-content')

@endsection

@section('content')
<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="btn-group float-right">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">TKLN</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active">Transaksi Online</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Catat Transaksi online mu disini</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Transaksi Online</h4>
                            <p class="text-muted m-b-30 font-14">Transaksi untuk pulsa, game online, token, paket data DLL</p>
                                <form role="form" method="post" action="{{ url('/proses/simpan') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jenis Transaksi</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="jenis">
                                                <option>Pulsa</option>
                                                <option>Freefire</option>
                                                <option>Mobile Legend</option>
                                                <option>PUBG</option>
                                                <option>Token Listrik</option>
                                                <option>Paket Data</option>
                                                <option>Tagihan Lain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Pelanggan </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="nama" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Nomor ID </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="nomor" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Modal </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="number" name="modal" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Total Bayar </label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="number" name="bayar" id="example-text-input">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-4">
                                            <button type="submit" class="btn btn-success ">Simpan</button>
                                        </div>
                                    </div>
                                    
                                    
                                </form>      
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->
@endsection
@section('js-content')

@endsection
