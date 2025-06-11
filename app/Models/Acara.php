<?php

namespace App\Models;

use App\Models\User;
use App\Models\Siswa;
use App\Models\Tiket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Acara extends Model
{
    use HasFactory;
    protected $table = 'acara';
    protected $fillable = ['nama', 'deskripsi', 'tanggal', 'lokasi', 'jenis_acara', 'dibuat_oleh', 'foto', 'stok', 'harga', 'notelp'];

    public function pembuat()
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }

    public function tiket()
    {
        return $this->hasMany(Tiket::class, 'id_acara');
    }
}