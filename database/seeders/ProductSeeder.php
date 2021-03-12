<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (SubCategory::get() as $subcategory) {
            for ($i = 1; $i < 4; $i++) {
                $subcategory->products()->create([
                    'name' => $subcategory->name . ' Product ' . $i
                ]);
            }
        }
    }
}
