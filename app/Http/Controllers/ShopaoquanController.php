<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopaoquanController extends Controller
{
    public function getAoquan()
    {
        return view('shop-aoquan.index-one');
    }
}
