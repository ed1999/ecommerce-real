<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->sentence(2);

        // $subcategory = Subcategory::all()->random();
        // $category = $subcategory->categoty;

        // $brand = $category->brands->random();

         /**
         * Definimos una variable luego queremos que nos recupere todas las subcategoria 
         * de la tabla y luego conel metodo random escojemos una al azar
         */
        // necesitamos importar el modelo
        $subcategory = Subcategory::all()->random();
       
       /**
        * Necesitamos la categoria a la que pertenece la SubCategoria 
        * esto lo hacemos mediante la relacion que hemos definido en el
        * modelo lo guardamos en una variable category
        */
        $category = $subcategory->category;

        /**
         * Recuperamos todas las marcas asociadas a esa categoria mediante la relación que 
         * tenemos en el modelo Category muchos a muchos BRANDS y luego mediante el metodo 
         * random seleccionamos una al azar.
         */
        $brand = $category->brands->random();

        if($subcategory->color){
            $quantity = null;
        }else{
            $quantity = 15;   
        }
    

        return [
            'name' => $name,
            'slug'=> Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99, 49.99, 99.99]),
            'subcategory_id' => $subcategory->id,
            'brand_id' => $brand->id,
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
