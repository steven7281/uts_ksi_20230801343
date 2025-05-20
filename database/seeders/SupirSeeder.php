<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupirSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('supirs')->insert([
            [
                'nama' => 'Budi Santoso',
                'no_hp' => '081234567890',
                'alamat' => 'Jl. Merdeka No. 1, Jakarta',
                'tanggal_lahir' => '1985-05-10',
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'no_hp' => '082345678901',
                'alamat' => 'Jl. Sudirman No. 2, Bandung',
                'tanggal_lahir' => '1990-08-15',
                'status' => 'tidak_aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}