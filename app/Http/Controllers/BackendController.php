<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
  // ==== ADMIN ====
  public function show_account()
  {
    return view("backend.admin.akun");
  }
  
  public function show_user($role)
  {
    return view("backend.admin.daftar_pengguna.{$role}");
  }
  
  public function show_tran($jenis)
  {
    $penjual_tran = ['pesanan', 'pembayaran'];
    
    if(in_array($jenis, $penjual_tran)){
      return view("backend.penjual.{$jenis}");
    } else {
      return view("backend.ekspedisi.{$jenis}");
    }
  }
  
  public function show_product()
  {
    return view("backend.penjual.produk");
  }

}
