<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekspedisi extends Model
{
    use HasFactory;

    protected $table = 'ekspedisi';
    protected $primaryKey = 'idEkspedisi';
    protected $keyType = 'string';

    protected $fillable = [
        'idEkspedisi', 'Akun_idAkun', 'nama'
    ];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'Akun_idAkun');
    }

    public function pengiriman()
    {
        return $this->hasMany(Pengiriman::class, 'idEkspedisi');
    }
}
