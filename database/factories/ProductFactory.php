<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model=Product::class;


    public function definition()
    {
        //se crea una sentencia de 2 palabras
        $name=$this->faker->sentence(2);
        //se selecciona una subcategoría al azar 
        $subcategory=Subcategory::all()->random();

        //se recupera la categoría a la que pertenece la subcategoría
        $category=$subcategory->category;

        

        if($subcategory->color){
            $quantity=null;
        }
        else{
            $quantity=15;
        }

        return [
            'name'=>$name,
            'slug'=>Str::slug($name),
            'description'=>$this->faker->text(),
            'price'=>$this->faker->randomElement([19.99,49.99,99.99]),
            'subcategory_id'=>$subcategory->id,
            'quantity'=>$quantity,
            'status'=>2
        ];
    }
}
