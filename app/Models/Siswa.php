<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = [
        'nis',
        'nisn',
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'alamat',
        'email',
        'username',
        'password',
        'no_hp',
        'foto',
    ];
}
