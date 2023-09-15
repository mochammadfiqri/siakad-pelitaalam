<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TahunAkademik extends Model
{
    use HasFactory;
    protected $table = 'tahun_akademik';
    protected $fillable = [
        'tahun_awal',
        'tahun_akhir',
        'semester',
        'tgl_awal',
        'tgl_akhir',
        'status',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'siswa_ta', 'ta_id', 'user_id');
    }
}
