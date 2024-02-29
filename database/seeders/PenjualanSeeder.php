<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'Haryo', 'penjualan_kode' => 'A50', 'penjualan_tanggal' => '2024-2-29'],
            ['penjualan_id' => 2, 'user_id' => 2, 'pembeli' => 'Ryo', 'penjualan_kode' => 'A10', 'penjualan_tanggal' => '2024-2-28'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Fadhil', 'penjualan_kode' => 'B50', 'penjualan_tanggal' => '2024-2-25'],
            ['penjualan_id' => 4, 'user_id' => 2, 'pembeli' => 'Nye', 'penjualan_kode' => 'B10', 'penjualan_tanggal' => '2024-2-10'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Lili', 'penjualan_kode' => 'A20', 'penjualan_tanggal' => '2024-2-19'],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'Riza', 'penjualan_kode' => 'A80', 'penjualan_tanggal' => '2024-2-20'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Rizky', 'penjualan_kode' => 'B90', 'penjualan_tanggal' => '2024-2-21'],
            ['penjualan_id' => 8, 'user_id' => 2, 'pembeli' => 'Slamet', 'penjualan_kode' => 'B100', 'penjualan_tanggal' => '2024-2-22'],
            ['penjualan_id' => 9, 'user_id' => 1, 'pembeli' => 'Paijo', 'penjualan_kode' => 'A45', 'penjualan_tanggal' => '2024-2-23'],
            ['penjualan_id' => 10, 'user_id' => 2, 'pembeli' => 'Iim', 'penjualan_kode' => 'A69', 'penjualan_tanggal' => '2024-2-24'], 
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
