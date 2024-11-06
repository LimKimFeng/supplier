<?php

namespace Database\Seeders;

use App\Models\Suplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Suplier::insert([
            [
                'nama_suplier' => 'PT. Sumber Makmur',
                'alamat_suplier' => 'Jl. Kebon Jeruk No. 15, Jakarta',
                'telp_suplier' => '021-5551234',
            ],
            [
                'nama_suplier' => 'CV. Sentosa Abadi',
                'alamat_suplier' => 'Jl. Cendana No. 8, Bandung',
                'telp_suplier' => '022-1234567',
            ],
            [
                'nama_suplier' => 'UD. Maju Terus',
                'alamat_suplier' => 'Jl. Sudirman No. 23, Surabaya',
                'telp_suplier' => '031-7654321',
            ],
            [
                'nama_suplier' => 'PT. Cahaya Abadi',
                'alamat_suplier' => 'Jl. Merdeka No. 45, Yogyakarta',
                'telp_suplier' => '0274-876543',
            ],
            [
                'nama_suplier' => 'CV. Jaya Bersama',
                'alamat_suplier' => 'Jl. Gatot Subroto No. 10, Medan',
                'telp_suplier' => '061-1239876',
            ],
        ]);
    }
}
