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
        return new Item([
            'alat' => $row[1],
            'lokasi' => $row[2],
            'pabrik' => $row[3],
            'seri' => $row[4],
            'pengesahan' => $row[5],
            'file' => $row[6],
            'tgl_msk' => $row[7],
            'tgl_klr' => $row[8],

        ]);
    }
}
