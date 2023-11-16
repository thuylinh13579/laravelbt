<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use HasFactory;
    protected $table = 'product_categories';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function products()
    {
       
     return $this->hasMany(ProductSeeder::class,'product_category_id','id');
       
    }

}
