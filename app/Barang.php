<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Barang extends Model
{
    protected $table = "barang";
 
    protected $fillable = ['nama_barang','harga_toko','harga_umum','harga_dos_per_pcs','harga_dos','harga_beli','sku','kategori','gambar'];
}