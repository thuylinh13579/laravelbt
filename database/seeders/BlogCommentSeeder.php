<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    use HasFactory;
    protected $table = 'blog_comments';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public function blog()
    {
        return $this->belongsTo(BlogSeeder::class,'blog_id','id');
    }
}
