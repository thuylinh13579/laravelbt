<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TongController extends Controller
{
  public function cong($a,$b)
  {
    return $a+$b;
  }
  public function tong()
  {
    return view('sum');
  }
}

