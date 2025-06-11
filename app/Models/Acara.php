<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Siswa;
use App\Models\Tiket;

class Acara extends Model
{
    use HasFactory;
    protected $table = 'acara';
    protected $fillable = ['nama', 'deskripsi', 'tanggal', 'lokasi', 'jenis_acara', 'dibuat_oleh'];

    public function pembuat()
    {
        return $this->belongsTo(Siswa::class, 'dibuat_oleh');
    }

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_acara');
    }
}