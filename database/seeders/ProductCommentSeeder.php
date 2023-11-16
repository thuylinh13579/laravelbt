<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use HasFactory;
    protected $table = 'product_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo(ProductSeeder::class,'product_id','id');
    }
    public function user()
    {
        return $this->belongsTo(UserSeeder::class,'user_id','id');
    }
}
