<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;

    protected $table = 'akun';
    protected $primaryKey = 'idAkun';
    protected $keyType = 'string';

    protected $fillable = [
        'idAkun', 'email', 'password', 'role'
    ];

    public function pembeli()
    {
        return $this->hasOne(Pembeli::class, 'Akun_idAkun');
    }

    public function penjual()
    {
        return $this->hasOne(Penjual::class, 'Akun_idAkun');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'Akun_idAkun');
    }

    public function ekspedisi()
    {
        return $this->hasOne(Ekspedisi::class, 'Akun_idAkun');
    }
}
