<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $fillable = [
        'nip',
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'alamat',
        'email',
        'username',
        'password',
        'no_hp',
        'mapel_id',
        'foto',
    ];
}
