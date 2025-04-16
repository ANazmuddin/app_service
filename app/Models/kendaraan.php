<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'id_kendaraan';
    public $timestamps = false;

    protected $fillable = [
        'no_pol',
        'tahun_kendaraan',
        'no_mesin',
        'no_rangka',
        'kapasitas_mesin',
        'transmisi',
    ];

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'id_pemilik');
    }
    
    public function jenis_kendaraan()
    {
        return $this->belongsTo(jnsKendaraan::class, 'id_jns_kendaraan');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'id_kendaraan');
    }
}