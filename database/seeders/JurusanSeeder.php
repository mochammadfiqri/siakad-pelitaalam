<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Jurusan::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Asisten Keperawatan',
            'Farmasi Klinis & Komunitas',
            'Teknik Komputer & Jaringan',
            'Rekayasa Perangkat Lunak',
            'Akutansi',
        ];

        foreach ($data as $value) {
            Jurusan::insert([
                'nama' => $value
            ]);
        }
    }
}
