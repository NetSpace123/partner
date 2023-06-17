<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            ['id' => 1, 'category_name' => 'Electronics','description'=>''],
            ['id' => 2, 'category_name' => 'Property','description'=>''],
            ['id' => 3, 'category_name' => 'Vehicles','description'=>''],
            ['id' => 4, 'category_name' => 'Home & Garden','description'=>''],
            ['id' => 5, 'category_name' => 'Business & Industry','description'=>''],
            ['id' => 6, 'category_name' => 'Animals','description'=>''],
            ['id' => 7, 'category_name' => 'Sport','description'=>''],
            ['id' => 8, 'category_name' => 'Kids','description'=>''],
            ['id' => 9, 'category_name' => 'Fashion & Beauty','description'=>''],
            ['id' => 10, 'category_name' => 'Education','description'=>''],
            ['id' => 11, 'category_name' => 'Essentials','description'=>''],
            ['id' => 12, 'category_name' => 'Agriculture','description'=>''],
            ['id' => 13, 'category_name' => 'Work Overseas','description'=>''],
            ['id' => 14, 'category_name' => 'Other','description'=>''],

        ];

        foreach($categories as $category){
            Category::insert($category);
        }
    }
}
