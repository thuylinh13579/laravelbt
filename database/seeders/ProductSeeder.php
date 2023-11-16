<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $guarded = [];
    // public function run()
    // {
    //     DB::table('products')->insert([
    //         [
    //             'name' => 'Product 1',
    //             'price' => 10.99,
    //         ],
    //         [
    //             'name' => 'Product 2',
    //             'price' => 19.99,
    //         ],
         
    //     ]);
    // }
    public function brand()
    { 
        {
        return $this->belongsTo(ProductSeeder::class,'brand_id','id');
        }
    }
    public function productCategory()
    { 
        {
        return $this->belongsTo(ProductCategorySeeder::class,'product_category_id','id');
        }
    }
    public function productDetails()
    { 
        {
        return $this->hasMany(ProductDetailSeeder::class,'product_id','id');
        }
    }
    public function productImages()
    { 
        {
        return $this->hasMany(ProductImageSeeder::class,'product_id','id');
        }
    }
    public function productComments()
    { 
        {
        return $this->hasMany(ProductCommentSeeder::class,'product_id','id');
        }
    }
}
