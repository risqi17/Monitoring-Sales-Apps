<?php

namespace App\Http\Controllers;

use Session;
use App\Barang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Imports\BarangImport;
use Maatwebsite\Excel\Facades\Excel;


class BelanjaController extends Controller
{
    public function index(){
        $data['barang'] = DB::select('SELECT *  FROM barang');
        $data['kategori'] = DB::select('SELECT distinct kategori FROM barang');

        return view('_layout/shop/index', $data);
    }

    public function cari(Request $request){
        $src = $request->input('orderby');
        $data['barang'] = DB::select('SELECT *  FROM barang WHERE kategori = "'.$src.'"');
        $data['kategori'] = DB::select('SELECT distinct kategori FROM barang');

        // echo $src;
        return view('_layout/shop/kategori', $data);
    }
}