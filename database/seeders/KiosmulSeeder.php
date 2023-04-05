<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\kiosmul;

class KiosmulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode_barang' => 'PRD001',
                'nama_barang' => 'Indomie15',
                'kategori_barang' => 'Makanan',
                'harga' => 3000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD002',
                'nama_barang' => 'Aqua',
                'kategori_barang' => 'Minuman',
                'harga' => 1000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD003',
                'nama_barang' => 'Sedap',
                'kategori_barang' => 'Makanan',
                'harga' => 3000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD004',
                'nama_barang' => 'Lolipop',
                'kategori_barang' => 'Snack',
                'harga' => 500,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD005',
                'nama_barang' => 'Ciki',
                'kategori_barang' => 'Snack',
                'harga' => 1000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD006',
                'nama_barang' => 'Yoyo',
                'kategori_barang' => 'Mainan',
                'harga' => 30000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD007',
                'nama_barang' => 'Beras',
                'kategori_barang' => 'Sembako',
                'harga' => 12000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD008',
                'nama_barang' => 'Indomie15',
                'kategori_barang' => 'Makanan',
                'harga' => 3000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD009',
                'nama_barang' => 'Aqua',
                'kategori_barang' => 'Minuman',
                'harga' => 1000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD010',
                'nama_barang' => 'Kentang',
                'kategori_barang' => 'Sembako',
                'harga' => 6000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD011',
                'nama_barang' => 'Bunga kol',
                'kategori_barang' => 'Sayuran',
                'harga' =>2000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD012',
                'nama_barang' => 'Selada',
                'kategori_barang' => 'Sayuran',
                'harga' => 3000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD013',
                'nama_barang' => 'Cabai',
                'kategori_barang' => 'Sayuran',
                'harga' => 5000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD014',
                'nama_barang' => 'Tomat',
                'kategori_barang' => 'Sayuran',
                'harga' => 3000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD015',
                'nama_barang' => 'Ketumbar',
                'kategori_barang' => 'Makanan',
                'harga' => 1000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD016',
                'nama_barang' => 'Kacang hijau',
                'kategori_barang' => 'Makanan',
                'harga' => 7000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD017',
                'nama_barang' => 'Bawang putih',
                'kategori_barang' => 'Sembako',
                'harga' => 11000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD018',
                'nama_barang' => 'Bawang merah',
                'kategori_barang' => 'Sembako',
                'harga' => 10000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD019',
                'nama_barang' => 'Minyak goreng',
                'kategori_barang' => 'Sembako',
                'harga' => 15000,
                'qty' => 100,
            ],
            [
                'kode_barang' => 'PRD020',
                'nama_barang' => 'Garam',
                'kategori_barang' =>'Sembako',
                'harga' => 2000,
                'qty' => 100,
            ],
        ];
        kiosmul::insert($data);
    }
}
