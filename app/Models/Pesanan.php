<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $primaryKey = 'idPesanan';
    protected $keyType = 'string';

    protected $fillable = [
        'idPesanan', 'idPembeli', 'tanggal', 'statusPesanan', 'totalHarga', 'alamatPengiriman'
    ];

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'idPembeli');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'idPesanan');
    }

    public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class, 'idPesanan');
    }

    public function pengiriman()
    {
        return $this->hasOne(Pengiriman::class, 'idPesanan');
    }
}
