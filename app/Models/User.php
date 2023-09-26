<?php

namespace App\Models;

use App\Models\Rombel;
use App\Models\Jurusan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nip',
        'nisn',
        'nis',
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'alamat',
        'email',
        'username',
        'password',
        'no_hp',
        'role_id',
        'rombel_id',
        'foto',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rombel(): BelongsTo
    {
        return $this->belongsTo(Rombel::class, 'rombel_id', 'id');
    }

    // public function jurusan(): BelongsTo
    // {
    //     return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    // }

}