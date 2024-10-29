<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            //Gorras Planas
            [
                'category_id' => 1,
                'name' => 'Est. Corona Alta',
                'slug' => Str::slug('Est. Corona Alta')
                
            ],
            [
                'category_id' => 1,
                'name' => 'Est. Corona Baja',
                'slug' => Str::slug('Est. Corona Baja')
                
            ],
            [
                'category_id' => 1,
                'name' => 'Inestructurada',
                'slug' => Str::slug('Inestructurada')
                
            ],

            //Gorras Normales
            [
                'category_id' => 2,
                'name' => 'E. Corona Alta',
                'slug' => Str::slug('E. Corona Alta')
                
            ],
            [
                'category_id' => 2,
                'name' => 'E. Corona Baja',
                'slug' => Str::slug('E. Corona Baja')
                
            ],
            [
                'category_id' => 2,
                'name' => 'Sn. Estructura',
                'slug' => Str::slug('Sn. Estructura')
                
            ],

            //Gorras Exclusivas
            [
                'category_id' => 3,
                'name' => 'Estrc. Corona Alta',
                'slug' => Str::slug('Estrc. Corona Alta')
                
            ],
            [
                'category_id' => 3,
                'name' => 'Est. Corona Baja',
                'slug' => Str::slug('Estrc. Corona Baja')
                
            ],
            [
                'category_id' => 3,
                'name' => 'Sin Estructura',
                'slug' => Str::slug('Sin Estructura')
                
            ],
        ];

        foreach($subcategories as $subcategory){

            Subcategory::factory(1)->create($subcategory);

        }
    }
}
