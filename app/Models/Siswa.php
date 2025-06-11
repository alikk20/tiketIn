<?php

namespace App\Models;

use App\Models\User;
use App\Models\Acara;
use App\Models\Tiket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nama',
        'nomor_siswa',
        'kelas',
        'email',
        'telepon',
        'peran',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function acara()
    {
        return $this->hasMany(Acara::class, 'dibuat_oleh');
    }

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_siswa');
    }
}