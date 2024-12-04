<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            ['name' => 'Яйце'], // ID 1
            ['name' => 'Молоко'], // ID 2
            ['name' => 'Борошно'], // ID 3
            ['name' => 'Цукор'], // ID 4
            ['name' => 'Сіль'], // ID 5
            ['name' => 'Олія'], // ID 6
            ['name' => 'М’ясо'], // ID 7
            ['name' => 'Картопля'], // ID 8
            ['name' => 'Морква'], // ID 9
            ['name' => 'Цибуля'], // ID 10
            ['name' => 'Буряк'], // ID 11
            ['name' => 'Капуста'], // ID 12
            ['name' => 'Томатна паста'], // ID 13
            ['name' => 'Часник'], // ID 14
            ['name' => 'Сметана'], // ID 15
            ['name' => 'Зелень'], // ID 16
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
