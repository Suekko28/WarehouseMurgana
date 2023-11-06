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
            'alat' => $row[0],
            'lokasi' => $row[1],
            'pabrik' => $row[2],
            'seri' => $row[3],
            'pengesahan' => $row[4],
            'file' => $row[5],
            'tgl_msk' => $row[6],
            'tgl_klr' => $row[7],
            'company_id' => $row[8],

        ]);
    }
}
