<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemilik extends Model
{
    use HasFactory;

    protected $table = 'pemilik';
    protected $primaryKey = 'id_pemilik';
    public $timestamps = false;

    protected $fillable = [
        'nm_pemilik',
        'tgl_lahir',
        'alamat',
        'nik',
        'no_hp',
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'id_pemilik');
    }

}