<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['title' =>'Parqueadero Cerca']);
        Category::create(['title' =>'Casa']);
        Category::create(['title' =>'Persona']);
        Category::create(['title' =>'Centro Comercial']);
        Category::create(['title' =>'Playa']);
        Category::create(['title' =>'Cercas']);
        Category::create(['title' =>'Arriola']);
        Category::create(['title' =>'Tejada']);

    }
}
