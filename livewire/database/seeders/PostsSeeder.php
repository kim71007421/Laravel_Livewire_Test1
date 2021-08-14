<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([
        // 'title' => Str::random(20),
        // 'slug' => Str::random(10),
        // 'body' => Str::random(100),
        // 'author_id' => rand(1, 1000),
        // 'created_at' => Carbon::now(),
        // ]);
        // Post::truncate();

        // $posts = factory(Post::class, 20)->make();
        // $chunks = $posts->chunk(10);

        // $chunks->each(function ($chunk) {
        // Post::insert($chunk->toArray());
        // });

        Post::factory()->count(20)->create();
    }
}
