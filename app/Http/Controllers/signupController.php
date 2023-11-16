<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use input ,File;
use App\Http\Requests\signupRequest;


class signupController extends Controller
{
    public function index(){
        return view('signup');
    }
    public function displayInfor(signupRequest $Request){
        $user=[
            'name'=>$name = $Request->input("Name"),
            'age'=>$age =$Request->input("age"),
            'date'=>$date =$Request->input("date"),
            'phone'=>$phone =$Request->input("phone"),
            'web'=>$web =$Request->input("web"),
            'address'=>$address =$Request->input("address"),
        ];
        return view('signup')->with('user',$user);
    }
}
