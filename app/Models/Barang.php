<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'id_barang';
    protected $fillable = [
        'nama_barang',
        'spesifikasi',
        'lokasi',
        'kondisi',
        'jumlah_barang',
        'sumber_dana',
    ];

    public function pinjamBarang()
    {
        return $this->hasMany(PinjamBarang::class, 'id_barang');
    }

    public function barangMasuk()
    {
        return $this->hasMany(BarangMasuk::class, 'id_barang');
    }

    public function barangKeluar()
    {
        return $this->hasMany(BarangKeluar::class, 'id_barang');
    }

    public function stok()
    {
        return $this->hasOne(Stok::class, 'id_barang');
    }
}

