<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  // ==== HONE ====
  public function home()
  {
    return view('frontend.home');
  }
}