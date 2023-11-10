<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;

class ItemExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    private $companyId;

    public function __construct($companyId)
    {
        $this->companyId = $companyId;
    }

    public function collection()
    {
        return Item::where('company_id', $this->companyId)->get();
    }
}
