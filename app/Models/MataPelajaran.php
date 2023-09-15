<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class MataPelajaran extends Model
{
    use HasFactory;
    protected $table = 'mata_pelajaran';
    protected $fillable = [
        'kode_mapel',
        'name',
        'kkm',
        'kelompok_id',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'guru_mapel', 'mapel_id', 'user_id');
    }
    
    public function kelompok(): BelongsTo
    {
        return $this->belongsTo(KelompokPembelajaran::class, 'kelompok_id', 'id');
    }
}
