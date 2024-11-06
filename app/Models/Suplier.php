<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    use HasFactory;

    protected $table = 'suplier';
    protected $primaryKey = 'id_suplier';
    protected $fillable = [
        'nama_suplier',
        'alamat_suplier',
        'telp_suplier',
    ];

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_suplier');
    }
}
