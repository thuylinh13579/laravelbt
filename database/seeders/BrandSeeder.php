<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use HasFactory;
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function products()
    {
        {
         return $this->hasMany(ProductSeeder::class,'brand_id','id');
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
}