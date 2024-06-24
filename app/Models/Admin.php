<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin';
    protected $primaryKey = 'idAdmin';
    protected $keyType = 'string';

    protected $fillable = [
        'idAdmin', 'Akun_idAkun', 'nama'
    ];

    public function akun()
    {
        return $this->belongsTo(Akun::class, 'Akun_idAkun');
    }
}
