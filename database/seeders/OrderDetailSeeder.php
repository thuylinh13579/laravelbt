<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function order()
    {
        {
            return $this->belongsTo(OrderSeeder::class,'order_id','id');
        }   
    }
    public function product()
    {
        {
        return $this->belongsTo(ProductSeeder::class,'product_id','id');
        }
      
    }
    
}
