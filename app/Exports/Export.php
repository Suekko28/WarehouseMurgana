<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Item::select('id','alat', 'lokasi', 'pabrik', 'seri','pengesahan','tgl_msk','tgl_klr')->get();    
    }
}
