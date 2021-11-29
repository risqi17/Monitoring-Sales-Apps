
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
                <!-- Column -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-webcam"></i>
                                    </div>
                                </div>
                                <div class="col-6 align-self-center text-center">
                                    <div class="m-l-10">
                                        <h5 class="mt-0 round-inner">
                                            @foreach ($jumlah as $j)
                                                {{ $j->jumlah }}
                                            @endforeach
                                        </h5>
                                        <p class="mb-0 text-muted">Jumlah Transaksi</p>                                                                 
                                    </div>
                                </div>
                                <div class="col-3 align-self-end align-self-center">
                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-account-multiple-plus"></i>
                                    </div>
                                </div>
                                <div class="col-6 text-center align-self-center">
                                    <div class="m-l-10 ">
                                        <h5 class="mt-0 round-inner">Rp 
                                            @foreach ($modal as $j)
                                                {{ number_format($j->modal ,0,",",".") }}
                                            @endforeach
                                        </h5>
                                        <p class="mb-0 text-muted">Total Modal</p>
                                    </div>
                                </div>
                                <div class="col-3 align-self-end align-self-center">
                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span></span></h6>
                                </div>                                                        
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round ">
                                        <i class="mdi mdi-basket"></i>
                                    </div>
                                </div>
                                <div class="col-6 align-self-center text-center">
                                    <div class="m-l-10 ">
                                        <h5 class="mt-0 round-inner">Rp 
                                            @foreach ($bayar as $j)
                                                {{ number_format($j->bayar ,0,",",".")}}
                                            @endforeach
                                        </h5>
                                        <p class="mb-0 text-muted">Total Bayar</p>
                                    </div>
                                </div>
                                <div class="col-3 align-self-end align-self-center">
                                    <h6 class="m-0 float-right text-center text-danger"> <i class="mdi mdi-arrow-down"></i> <span></span></h6>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-rocket"></i>
                                    </div>
                                </div>
                                <div class="col-6 align-self-center text-center">
                                    <div class="m-l-10">
                                        <h5 class="mt-0 round-inner">Rp 
                                            {{ number_format($untung,0,",",".") }}
                                        </h5>
                                        <p class="mb-0 text-muted">Total Keuntungan</p>
                                    </div>
                                </div>
                                <div class="col-3 align-self-end align-self-center">
                                    <h6 class="m-0 float-right text-center text-success"> <i class="mdi mdi-arrow-up"></i> <span></span></h6>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body table-responsive">

                            <h4 class="mt-0 header-title">Daftar Transaksi Online Toko Kulaan</h4>
                            <p class="text-muted m-b-30 font-14">Catat semua transaksi online disini selengkap-lengkapnya mulai Pulsa, Token, Game Online DLL
                            </p>

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Nomor ID</th>
                                    <th>Jenis Transaksi</th>
                                    <th>Tanggal</th>
                                    <th>Modal</th>
                                    <th>Jumlah Bayar</th>
                                    <th></th>
                                    
                                </tr>
                                </thead>


                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($transaksi as $b)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $b->nama_pelanggan }}</td>
                                    <td>{{ $b->nomor_id }}</td>
                                    <td>{{ $b->jenis_transaksi }}</td>
                                    <td>{{ $b->tanggal }}</td>
                                    <td>{{ number_format($b->modal ,0,",",".") }}</td>
                                    <td>{{ number_format($b->bayar ,0,",",".") }}</td>
                                    <td><a href="{{ url('/hapus/transaksi') }}/{{ $b->id }}" class="btn btn-success">Hapus</a></td>
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
