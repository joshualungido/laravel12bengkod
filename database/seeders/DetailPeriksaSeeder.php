<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_periksas')->insert([
            [
                'id_periksa' => 1, // ganti jadi 1
                'id_obat' => 1,
            ],
            [
                'id_periksa' => 1, // ganti jadi 1
                'id_obat' => 2,
            ],
            [
                'id_periksa' => 2, // ganti jadi 2
                'id_obat' => 3,
            ],
        ]);
        
    }
}
