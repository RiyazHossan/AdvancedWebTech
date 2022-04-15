<?php

namespace Database\Factories;


use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
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
           'name' => $this->faker->name,
           'text' => $this->faker->text()
        ];
    }
}
