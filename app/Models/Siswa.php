<?php

namespace App\Models;

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

    public function acara()
    {
        return $this->hasMany(Acara::class, 'dibuat_oleh');
    }

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_siswa');
    }
}