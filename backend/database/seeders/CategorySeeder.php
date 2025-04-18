<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mainCategories = Category::factory(20)->create();

        Category::factory(100)->create([
            'parent_id' => fn () => $mainCategories->random()->id,
        ]);
    }

}


    
