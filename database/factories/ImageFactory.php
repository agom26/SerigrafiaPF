<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    

    public function definition()
    {
        return [
            'url'=>'products/'.$this->faker->image('public/storage/products',640,480,null,false)
        ];
    }
}
