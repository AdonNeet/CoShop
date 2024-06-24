<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    use HasFactory;

    protected $table = 'order_items';

    protected $fillable = [
        'idPesanan', 'idProduk', 'quantity'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'idPesanan');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'idProduk');
    }
}
