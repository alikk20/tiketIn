<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Acara;
use App\Models\Siswa;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tiket';

    protected $fillable = ['id_acara', 'pembeli', 'tanggal_pembelian', 'kode_tiket', 'status'];

    public function acara()
    {
        return $this->belongsTo(Acara::class, 'id_acara');
    }
    
}