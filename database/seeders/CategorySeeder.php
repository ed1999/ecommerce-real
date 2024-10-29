<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
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
        $categories = [
            [
                'name' => 'Gorras',
                'slug'=> Str::slug('Gorras'),
                'icon' => '<i class="fa-solid fa-wine-bottle"></i>'
            ],
            [
                'name' => 'Gorras Premium',
                'slug'=> Str::slug('Gorras Premium'),
                'icon' => '<i class="fa-solid fa-candy-cane"></i>'
            ],
            [
                'name' => 'Gorras Exclusivas',
                'slug'=> Str::slug('Gorras Exclusivas'),
                'icon' => '<i class="fa-solid fa-sword-laser-alt"></i>'
            ],
        ];

        foreach($categories as $category){
            $category = Category::factory(1)->create($category)->first();
            $brands = Brand::factory(4)->create();

            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
