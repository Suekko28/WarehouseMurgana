<?php

namespace App\Imports;

use App\Models\Item;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToModel;

class Import implements ToModel
{
    protected $companyId;

    // Konstruktor untuk menerima $id perusahaan
    public function __construct($companyId)
    {
        $this->companyId = $companyId;
    }

    /**
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Item([
            'alat' => $row['0'],
            'lokasi' => $row['1'],
            'pabrik' => $row['2'],
            'seri' => $row['3'],
            'pengesahan' => $row['4'],
            'tgl_msk' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['5'])->format('Y-m-d'),        
            'tgl_klr' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['6'])->format('Y-m-d'),            
            'company_id' => $this->companyId, // Menggunakan $this->companyId yang diambil dari konstruktor
        ]);
    }
}
