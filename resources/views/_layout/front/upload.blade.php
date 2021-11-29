
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
                                <li class="breadcrumb-item active">Daftar Harga</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Upload Daftar Harga Barang</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <h4 class="mt-0 header-title">Upload Barang</h4>
                            <p class="text-muted m-b-30 font-14">Pastikan format excel sesuai dengan template yang dicontohkan, <a href="">Download Template</a></p>
                            <div class="general-label">
                                <form class="form-inline" role="form" method="post" action="/proses/upload" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">File</label>
                                        <input type="file" class="form-control ml-2" name="file" id="exampleInputEmail2" placeholder="Enter email">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success ml-2">Unggah Data</button>
                                </form>           
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->
@endsection
@section('js-content')

@endsection
