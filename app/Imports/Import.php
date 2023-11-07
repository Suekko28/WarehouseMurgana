<?php

namespace App\Imports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\ToModel;

class Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // Mendapatkan ID perusahaan dari konteks atau parameter yang sesuai
        $company_id = $this->company_id;
    
        return new Item([
            'alat' => $row[1],           // Kolom 1: Kategori Alat
            'lokasi' => $row[2],         // Kolom 2: Lokasi
            'pabrik' => $row[3],         // Kolom 3: Pabrik Pembuat
            'seri' => $row[4],           // Kolom 4: No Seri
            'pengesahan' => $row[5],     // Kolom 5: No Pengesahan
            'file' => $row[6],           // Kolom 6: File
            'tgl_msk' => $row[7],        // Kolom 7: Tanggal Masuk
            'tgl_klr' => $row[8],        // Kolom 8: Tanggal Keluar
            'company_id' => $company_id, // ID perusahaan yang sesuai
        ]);
    }
}
