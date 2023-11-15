<?php

namespace App\Exports;

use App\Models\Item;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Export implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Item::all(['id', 'alat', 'lokasi', 'pabrik', 'seri', 'pengesahan', 'tgl_msk', 'tgl_klr']);
    }

    public function headings(): array
    {
        return [
            'No',
            'Kategori Alat',
            'Lokasi',
            'Pabrik Pembuat',
            'No.Seri',
            'No.Pengesahan',
            'Tanggal Masuk',
            'Tanggal Keluar',
        ];
    }
}