<?php

namespace Database\Seeders;

use App\Models\QualitySeal;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualitySealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        QualitySeal::create(["name" => "Sustainable product"]);
        QualitySeal::create(["name" => "Bred in the wild animals"]);
        QualitySeal::create(["name" => "Ecological farming"]);
        QualitySeal::create(["name" => "Zero carbon footprint"]);
        QualitySeal::create(["name" => "Recyclable packaging"]);
    }
}
