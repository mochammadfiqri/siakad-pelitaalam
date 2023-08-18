<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAkademik extends Model
{
    use HasFactory;
    protected $table = 'tahun_akademik';
    protected $fillable = [
        'tgl_awal',
        'tgl_akhir',
    ];
}
