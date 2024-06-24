<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli';
    protected $primaryKey = 'idPembeli';
    protected $keyType = 'string';

    protected $fillable = [
        'idPembeli', 'Akun_idAkun', 'nama', 'alamat', 'telp'
    ];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'Akun_idAkun');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'idPembeli');
    }
}
