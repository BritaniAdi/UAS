<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = new Categories;
        $categories->CategoryName = 'Electronic';
        $categories->Description = 'Semua Barang Elektronik';
        $categories->Picture = fake()->imageUrl;
        $categories->save();

        $categories = new Categories;
        $categories->CategoryName = 'Makanan';
        $categories->Description = 'Semua Barang Makanan';
        $categories->Picture = fake()->imageUrl;
        $categories->save();

        $categories = new Categories;
        $categories->CategoryName = 'Minuman';
        $categories->Description = 'Semua Barang Minuman';
        $categories->Picture = fake()->imageUrl;
        $categories->save();
    }
}