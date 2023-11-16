<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use I


class paycontroller extends Controller
{
    public function pay() 
    {
     return view ('pay');
    }
    public function getAdminEdit($id) 
    {
    $product = Product::find($id);
     return view('pageadmin.formEdit')->with('product', $product);
    }

    public function postAdminDelete($id) 
    {
       $product = Product::find($id);
       $product->delete();
       return $this->getIndexAdmin();
    }
    public function getAdminEdit($id) 
    {
    $product = Product::find($id);
    return view('pageadmin.formEdit')->with('product',$product);
    }   
    public function postAdminEdit(Request $request) 
    {
    $id = $request->editId;
    }
 }     