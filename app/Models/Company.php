<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
    ];
    protected $primaryKey = "id";
    protected $table = 'companies';

    public function item(){

        return $this->hasOne    (Item::class);
    }

    use HasFactory;


}
