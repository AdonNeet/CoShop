<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengiriman';
    protected $primaryKey = 'idPengiriman';
    protected $keyType = 'string';

    protected $fillable = [
        'idPengiriman', 'idEkspedisi', 'idPesanan', 'tanggal', 'statusPengiriman'
    ];

    public function ekspedisi()
    {
        return $this->belongsTo(Ekspedisi::class, 'idEkspedisi');
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'idPesanan');
    }
}
