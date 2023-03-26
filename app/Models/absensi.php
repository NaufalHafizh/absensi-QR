<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensi extends Model
{
    use HasFactory;

    protected $fillable = [

        'id_pegawai'
    ];

    public function pegawai(){
        
        return $this->hasMany(pegawai::class, 'id_pegawai');
    }
}
