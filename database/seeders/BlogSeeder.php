<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use HasFactory;
    protected $table = 'blogs';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function BlogComment()
    {
        return $this->hasMany(BlogCommentSeeder::class,'blog_id','id');
    }
}
