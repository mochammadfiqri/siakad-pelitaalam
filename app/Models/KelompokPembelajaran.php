<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokPembelajaran extends Model
{
    use HasFactory;
    protected $table = 'kelompok_pembelajaran';
    protected $fillable = [
        'nama',
    ];
}
