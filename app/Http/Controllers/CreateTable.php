<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class CreateTable extends Controller
{
    public function table(){
        if (!Schema::hasTable ('Productsl')) {
            Schema::create('Productsl',function($table){
                $table->increments('id');
                $table->string('name');
                $table->string('image');
                $table->string('description');
                $table->string('quantity');
                $table->string('date');
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('table_name')){
            Schema::create('Products2',function($table){
                $table->increments('id');
                $table->string('name');
                $table->string('image');
                $table->string('description');
                $table->string('quantity');
                $table->string('date');   
            });
        }
        echo 'da tao bang ';
    }
}
