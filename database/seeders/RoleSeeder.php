<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Role::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'admin',
            'siswa',
            'guru',
            'kepala sekolah',
            'wakil kepala sekolah',
            'bendahara',
            'staff tata usaha',
            'staff perpustakaan',
        ];

        foreach ($data as $value) {
            Role::insert([
                'name' => $value
            ]);
        }
    }
}
