<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'alat',
        'lokasi',
        'pabrik',
        'seri',
        'pengesahan',
        'keterangan',
        'company_id',
        'file',
    ];
    protected $primaryKey = "id";
    protected $table = 'items';

    public function Company(){
        return $this->belongsTo(Company::class);
    }

    use HasFactory;
}
