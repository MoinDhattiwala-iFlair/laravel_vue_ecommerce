<?php

namespace Database\Seeders;

use App\Models\Category;
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
        $data = [
            ['name' => 'Fashion'],
            ['name' => 'Mobiles and Tablets'],
            ['name' => 'Consumer Electronics'],
            ['name' => 'Books'],
            ['name' => 'Movie Tickets'],
            ['name' => 'Baby Products'],
            ['name' => 'Groceries'],
            ['name' => 'Food Takeaway/Delivery'],
            ['name' => 'Home Furnishings'],
            ['name' => 'Jewelry']
        ];
        foreach ($data as $cat) {
            Category::create($cat);
        }
    }
}
