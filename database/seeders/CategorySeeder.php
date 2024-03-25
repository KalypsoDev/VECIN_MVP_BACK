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
        Category::create(["name" => "Fruits and vegetables"]);
        Category::create(["name" => "Legumes"]);
        Category::create(["name" => "Eggs and dairy products"]);
        Category::create(["name" => "Pasta and cereals"]);
        Category::create(["name" => "Nuts and snacks"]);
        Category::create(["name" => "Honey and jam"]);
        Category::create(["name" => "Oil and butter"]);
        Category::create(["name" => "Drinks"]);
    }
}
