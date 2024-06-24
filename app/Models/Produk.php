<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'idProduk';
    protected $keyType = 'string';

    protected $fillable = [
        'idProduk', 'idPenjual', 'idKategori', 'nama', 'harga', 'stok'
    ];

    public function penjual()
    {
        return $this->belongsTo(Penjual::class, 'idPenjual');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idKategori');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class, 'idProduk');
    }
}
