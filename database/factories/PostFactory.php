<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'free' => rand(0, 1),

            /* Realaciones */
            'course_id' => rand(1,10),
        ];
    }
}
