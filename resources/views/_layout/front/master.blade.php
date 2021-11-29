
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
                        <h4 class="page-title">Daftar Harga</h4>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body table-responsive">

                            <h4 class="mt-0 header-title">Daftar Harga Toko Kulaan</h4>
                            <p class="text-muted m-b-30 font-14">Dibawah iki rego sg enek ng toko kulaan lak pengen pesen monggo mampir ng toko nggeh bos.
                            </p>

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Toko</th>
                                    <th>Harga Umum</th>
                                    <th>Harga Dos Per PCS</th>
                                    <th>Harga Dos</th>
                                    <th>Harga Beli</th>
                                </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($barang as $b)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $b->nama_barang }}</td>
                                    <td>{{ $b->harga_toko }}</td>
                                    <td>{{ $b->harga_umum }}</td>
                                    <td>{{ $b->harga_dos_per_pcs }}</td>
                                    <td>{{ $b->harga_dos }}</td>
                                    <td>{{ $b->harga_beli }}</td>
                                </tr>
                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach 
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->
@endsection
@section('js-content')

@endsection
