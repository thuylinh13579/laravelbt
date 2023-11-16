<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductimageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use HasFactory;
    protected $table = 'product_images';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function run()
    {
        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'img/products/product-1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'img/products/product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'img/products/product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'img/products/product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'img/products/product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'img/products/product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'img/products/product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'img/products/product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'img/products/product-9.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'img/products/product-10.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'img/products/product-11.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'img/products/product-12.jpg',
            ],
           
        ]);
    }
    public function product()
    {
        return $this->belongsTo(ProductSeeder::class,'product_id','id');
    }
}
