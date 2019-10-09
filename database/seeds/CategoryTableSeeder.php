<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_1 = [
            'name' => 'Laptops',
        ];
        $category_2 = [
            'name' => 'Motherboards',
        ];
        $category_3 = [
            'name' => 'SSD',
        ];
        $category_4 = [
            'name' => 'Laptop Rams',
        ];

        Category::create($category_1);
        Category::create($category_2);
        Category::create($category_3);
        Category::create($category_4);
        
    }
}
