<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Nonaktifkan kunci asing
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Lakukan truncate pada tabel tahun_akademik
        DB::table('mata_pelajaran')->truncate();

        // Aktifkan kembali kunci asing
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
