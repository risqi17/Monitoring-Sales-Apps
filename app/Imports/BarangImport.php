<?php

namespace App\Imports;

use App\Barang;
use Maatwebsite\Excel\Concerns\ToModel;

class BarangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            'nama_barang'     => $row[0],
            'harga_toko'    => $row[1], 
            'harga_umum'    => $row[2], 
            'harga_dos_per_pcs'    => $row[3], 
            //'harga_dos'    => $row[4], 
            'harga_beli'    => $row[4],
            'sku' => $row[6],
            'kategori' => $row[7],
            'gambar' => $row[8]
            
        ]);
    }
}
