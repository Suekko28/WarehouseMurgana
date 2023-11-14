<?php

namespace App\Imports;

use App\Models\Item;
use Illuminate\Support\Facades\Validator;
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
        // Validate the row data
        $validator = Validator::make($row, [
            'alat' => 'required|max:20',
            'lokasi' => 'required|max:20',
            'pabrik' => 'required|max:20',
            'seri' => 'required|max:20',
            'pengesahan' => 'required|max:20',
            'tgl_msk' => 'required|date',
            'tgl_klr' => 'required|date',
            'company_id' => 'required|exists:companies,id',
        ]);

        // If validation fails, log the errors and return null
        if ($validator->fails()) {
            \Log::error('Validation error during import: ' . json_encode($validator->errors()->all()));
            return null;
        }

        // If validation passes, create and return a new Item instance
        return new Item([
            'alat' => $row['alat'],
            'lokasi' => $row['lokasi'],
            'pabrik' => $row['pabrik'],
            'seri' => $row['seri'],
            'pengesahan' => $row['pengesahan'],
            'tgl_msk' => $row['tgl_msk'],
            'tgl_klr' => $row['tgl_klr'],
            'company_id' => $row['company_id'],
        ]);
    }
}
