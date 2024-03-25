<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\QualitySeal;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear 10 productos
        $products = Product::factory()->count(10)->create();

        // Obtener todos los sellos de calidad
        $qualitySeals = QualitySeal::all();

        // Adjuntar sellos de calidad a cada producto
        $products->each(function ($product) use ($qualitySeals) {
            // Aquí adjuntamos un número aleatorio de sellos de calidad a cada producto
            // asumiendo que queremos entre 1 y 5 sellos por producto.
            $product->qualitySeals()->attach(
                $qualitySeals->random(rand(1, 5))->pluck('id')->toArray()
            );
        });
    }
}
