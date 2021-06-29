<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->text(40),
            'details'=>$this->faker->text(80),
            'description'=>$this->faker->text,
            'image'=>'images/images.jpg',
            'category_id'=>Category::all()->random(),
            'user_id'=>User::all()->random()
        ];
    }
}
