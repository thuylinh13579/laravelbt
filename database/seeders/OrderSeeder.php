<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     use HasFactory;
     protected $table = 'orders';
     protected $primaryKey = 'id';
     protected $guarded = [];
    public function orderDetails()
    {
        {
         return $this->hasMany(OrderDetailSeeder::class,'order_id','id');
        }
    //     DB::table('brands')->insert([
    //         ['name' => 'Pure Pineapple'],
    //         ['name' => 'Guangzhou sweater'],
    //         ['name' => 'Microfiber Wool Scarf'],
    //         ['name' => 'Men s Painted Hat'],
    //         ['name' => 'Converse Shoes'],
    //         ['name' => '2 Layer Windbreaker'],
    //     ]);
    }
    //     DB::table('orders')->insert([
    //         ['first_name' => 'Thuy'],
    //         ['last_name' => 'Huynh'],
    //         ['company_name' => 'Fashi.'],
    //         ['country' => ' New York'],
    //         ['street_address' => '60-49 Road 11378 New York'],
    //         ['postcode_zip' => '2 Layer Windbreaker'],
    //         ['town_city' => 'Men s Painted Hat'],
    //         ['email' => 'hello.colorlib@gmail.com'],
    //         ['phone' => '+65 11.188.888'],
            
    //     ]);
    
}
