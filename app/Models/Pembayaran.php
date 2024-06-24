<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primaryKey = 'idPembayaran';
    protected $keyType = 'string';

    protected $fillable = [
        'idPembayaran', 'idMetodePembayaran', 'idPesanan', 'tanggal', 'jumlah', 'statusPembayaran'
    ];

    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'idMetodePembayaran');
    }

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'idPesanan');
    }
}
