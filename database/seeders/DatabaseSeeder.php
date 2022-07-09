<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\category;
use App\Models\Comment;
use App\Models\User;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // $yya = User::factory()->create(['name' => 'YellYint' , 'user_name' => 'yya']);
        // $pk = User::factory()->create(['name' => 'PK' , 'user_name' => 'pk']);
        // $n = User::factory()->create(['name' => 'N' , 'user_name' => 'n']);
        // User::factory(3)->create();
        // $pk = User::factory()->create(['name' => 'PK' , 'user_name' => 'pk']);
        // $f = category::factory()->create(['name' => 'Frontend' , 'slug' => 'frontend']);
        // $b = category::factory()->create(['name' => 'Backend' , 'slug' => 'backend']);
        // $f = Blog::factory(2)->create(['user_id' => $yya->id]);
        // $s = Blog::factory(2)->create(['user_id' => $pk->id]);
        // Blog::factory(5)->create();
        // Blog::factory(2)->create(['category_id' => $b->id , 'user_id' => $pk->id]);
        // Blog::factory(3)->create(['category_id'=>$b->id]);
        Blog::factory(3)->create();

        // Comment::factory(3)->create(['user_id' => $yya->id , 'blog_id' => $f->id]);
        // Comment::factory(3)->create(['user_id' => $pk->id , 'blog_id' => $s->id]);
        // Comment::factory(3)->create();

        // Comment::factory(3)->create(['user_id' => $n->id , 'blog_id' => $s->id]);
    }
}
