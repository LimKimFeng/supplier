<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuk';
    protected $fillable = [
        'id_barang',
        'nama_barang',
        'tgl_masuk',
        'jml_masuk',
        'id_suplier',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang');
    }

    public function suplier()
    {
        return $this->belongsTo(Suplier::class, 'id_suplier');
    }
}
