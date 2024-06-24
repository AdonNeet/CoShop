<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjual extends Model
{
    use HasFactory;

    protected $table = 'penjual';
    protected $primaryKey = 'idPenjual';
    protected $keyType = 'string';

    protected $fillable = [
        'idPenjual', 'Akun_idAkun', 'nama', 'alamat', 'telp'
    ];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'Akun_idAkun');
    }

    public function produk()
    {
        return $this->hasMany(Produk::class, 'idPenjual');
    }
}
