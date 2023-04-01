<?php

namespace Database\Seeders;

use App\Models\pegawai;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pegawai::create([

            'id_pegawai' => rand(1000, 100),
            'nama_pegawai' => "Muhammad Naufal Hafizh",
            'jabatan' => "Staff",
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
