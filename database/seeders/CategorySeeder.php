<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories=[
            [
                'name'=>'Celulares y tablets',
                'slug'=>Str::slug('Celulares y tablets'),
                'icon'=>'<i class="fa-solid fa-mobile-screen-button"></i>'
            ],
            [
                'name'=>'TV, audio y video',
                'slug'=>Str::slug('TV, audio y video'),
                'icon'=>'<i class="fa-solid fa-tv"></i>'
            ],
            [
                'name'=>'Consola y videojuegos',
                'slug'=>Str::slug('Consola y videojuegos'),
                'icon'=>'<i class="fa-regular fa-gamepad"></i>'
            ],
            [
                'name'=>'Computación',
                'slug'=>Str::slug('Computación'),
                'icon'=>'<i class="fa-regular fa-laptop"></i>'
            ],
            [
                'name'=>'Moda',
                'slug'=>Str::slug('Moda'),
                'icon'=>'<i class="fa-regular fa-shirt"></i>'
            ],
        ];


        //Por cada categoria creada se crearán 4 marcas y serán asignadas a esa categoría
        foreach ($categories as $category){
            $category=Category::factory(1)->create($category)->first();

            
        }
    }
}
