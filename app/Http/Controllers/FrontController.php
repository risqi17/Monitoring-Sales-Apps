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


class FrontController extends Controller
{
    public function index(){
        $data['barang'] = DB::select('SELECT *  FROM barang');

        return view('_layout/front/master', $data);
    }
    public function uploadBarang(){
        $data['barang'] = DB::select('SELECT *  FROM barang');
        
        return view('_layout/front/upload', $data);
    }

    public function prosesUploadBarang(Request $request) 
	{
		DB::table('barang')->truncate();
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('data_barang',$nama_file);

		// import data
		Excel::import(new BarangImport, public_path('/data_barang/'.$nama_file));
 
		// alihkan halaman kembali
		return redirect('/upload');
	}

	public function transaksiOnline(){
        return view('_layout/front/transaksi');
    }

	public function simpanTransaksi(Request $request){
		DB::table('transaksi')->insert([
			'nama_pelanggan' => $request->input('nama'),
			'nomor_id' => $request->input('nomor'),
			'jenis_transaksi' => $request->input('jenis'),
			'modal' => $request->input('modal'),
			'bayar' => $request->input('bayar'),
		]);

		return redirect('/transaksi');
	}
	public function laporanTransaksi(){
		$data['transaksi'] = DB::select('SELECT *  FROM transaksi');
		$data['jumlah'] = DB::select('SELECT COUNT(id) AS jumlah  FROM transaksi');
		$data['modal'] = DB::select('SELECT SUM(modal) AS modal  FROM transaksi');
		$data['bayar'] = DB::select('SELECT SUM(bayar) AS bayar  FROM transaksi');

		$ad = DB::select('SELECT SUM(modal) AS modal  FROM transaksi');
		$da = DB::select('SELECT SUM(bayar) AS bayar  FROM transaksi');
        
		
		foreach($da as $d){
			$a = $d->bayar;
		}

		foreach($ad as $ada){
			$b = $ada->modal;
		}

		$data['untung'] = $a - $b;
		
		// echo $data['untung'];
		
		return view('_layout/front/laporan', $data);
    }

	public function hapusTransaksi($id){
        DB::table('transaksi')->where('id', $id)->delete();
		return redirect('/laporan');
    }
}
