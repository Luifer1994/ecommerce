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
        $category = [

            [
                'name'  => 'Celulares y Tablet',
                'slug'  => Str::slug('Celulares y Tablet'),
                'icon'  => '<i class="fas fa-mobile-alt"></i>',
            ],
            [
                'name'  => 'Tv, audio y video',
                'slug'  => Str::slug('Tv, audio y video'),
                'icon'  => '<i class="fas fa-tv"></i>',
            ],
            [
                'name'  => 'Consola y video juegos',
                'slug'  => Str::slug('Consola y video juegos'),
                'icon'  => '<i class="fas fa-gamepad"></i>',
            ],
            [
                'name'  => 'Computación',
                'slug'  => Str::slug('Computación'),
                'icon'  => '<i class="fas fa-laptop"></i>',
            ],
            [
                'name'  => 'Moda',
                'slug'  => Str::slug('Moda'),
                'icon'  => '<i class="fas fa-tshirt"></i>',
            ],

        ];

        foreach ($category as $value) {
            $categories = Category::factory(1)->create($value)->first();

            $brands =  Brand::factory(4)->create();

            foreach ($brands as $brand) {

                $brand->categories()->attach($categories->id);
            }
        }
    }
}
