<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jnsKendaraan extends Model
{
    use HasFactory;
    protected $table = 'jns_kendaraan';

    protected $fillable = [
        'id_jns_kendaraan',
        'nm_jns_kendaraan ',
    ];
}
