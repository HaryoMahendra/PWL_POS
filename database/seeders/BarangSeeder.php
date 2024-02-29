<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'ATK-001', 'barang_nama' => 'Pensil', 'harga_beli' => '4000', 'harga_jual' => 5000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'ATK-002', 'barang_nama' => 'Buku Tulis', 'harga_beli' => '20000', 'harga_jual' => 25000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'ATK-003', 'barang_nama' => 'Penghapus', 'harga_beli' => '2500', 'harga_jual' => 3000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'KMS-001', 'barang_nama' => 'Mouse', 'harga_beli' => '48000', 'harga_jual' => 50000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'KMS-002', 'barang_nama' => 'Keyboard', 'harga_beli' => '95000', 'harga_jual' => 100000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'KMS-003', 'barang_nama' => 'Monitor', 'harga_beli' => '18500000', 'harga_jual' => 20000000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'ELK-001', 'barang_nama' => 'Kipas Angin', 'harga_beli' => '290000', 'harga_jual' => 300000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'ELK-002', 'barang_nama' => 'Rice Cooker', 'harga_beli' => '100000', 'harga_jual' => 150000],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'ELK-003', 'barang_nama' => 'Blender', 'harga_beli' => '150000', 'harga_jual' => 200000],
            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'MKN-001', 'barang_nama' => 'Mie Instan', 'harga_beli' => '2500', 'harga_jual' => 3000]
        ];
        DB::table('m_barang')->insert($data);
    }
}
