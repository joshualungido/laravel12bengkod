<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Matikan foreign key constraint sementara
        Schema::disableForeignKeyConstraints();

        // Truncate tabel biar auto increment kembali ke 1
        DB::table('detail_periksas')->truncate();
        DB::table('periksas')->truncate();
        DB::table('users')->truncate();

        Schema::enableForeignKeyConstraints();

        DB::table('periksas')->delete();
        DB::table('users')->delete();

        // Insert pasien
        DB::table('users')->insert([
            [
                'id' => 1,
                'nama' => 'Gaston Badnis',
                'alamat' => 'Semarang',
                'no_hp' => '1279804',
                'email' => 'pasien@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'pasien',
            ],
            [
                'id' => 3, // Dokter dengan id = 3 (SAMA dengan yang dipakai di PeriksaSeeder)
                'nama' => 'Dr. Sutrisno',
                'alamat' => 'Semarang',
                'no_hp' => '08123456789',
                'email' => 'dokter@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'dokter',
            ],
        ]);
    }
}
