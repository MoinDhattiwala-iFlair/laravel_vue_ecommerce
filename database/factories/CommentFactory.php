<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [            
            'user_id' => User::inRandomOrder()->first('id'),
            'post_id' => Post::inRandomOrder()->first('id'),
            'comment' => $this->faker->paragraph(rand(5,10), false)
        ];
    }
}
