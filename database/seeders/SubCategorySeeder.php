<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Category::get() as $category) {
            for($i = 1; $i < 4; $i++) {
                $category->subcategory()->create([
                    'name' => $category->name.' '.$i
                ]);
            }
        }
    }
}
