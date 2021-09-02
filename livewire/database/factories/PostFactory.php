<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' 		   => $this->faker->realText(30),
            'slug'			    => $this->faker->name(),
            'body'			    => $this->faker->realText(),
            'author_id'		=> User::all()->pluck('id')->random(),
            'created_at'	=> Carbon::now(),
        ];
    }
}
