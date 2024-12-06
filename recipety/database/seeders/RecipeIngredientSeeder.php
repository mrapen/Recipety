<?php

namespace Database\Seeders;

use App\Models\RecipeIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Інгредієнти для млинців
        RecipeIngredient::create([
            'recipe_id' => 1,
            'ingredient_id' => 1, // Яйце
            'quantity' => '3',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 1,
            'ingredient_id' => 2, // Молоко
            'quantity' => '500',
            'unit' => 'мл',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 1,
            'ingredient_id' => 3, // Борошно
            'quantity' => '250',
            'unit' => 'г',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 1,
            'ingredient_id' => 4, // Цукор
            'quantity' => '2',
            'unit' => 'ст.л.',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 1,
            'ingredient_id' => 5, // Сіль
            'quantity' => '1',
            'unit' => 'дрібка',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 1,
            'ingredient_id' => 6, // Олія
            'quantity' => '2',
            'unit' => 'ст.л.',
        ]);



        // Інгредієнти для борщу
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 7, // М’ясо
            'quantity' => '500',
            'unit' => 'г',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 8, // Картопля
            'quantity' => '3',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 9, // Морква
            'quantity' => '1',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 10, // Цибуля
            'quantity' => '1',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 11, // Буряк
            'quantity' => '2',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 12, // Капуста
            'quantity' => '300',
            'unit' => 'г',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 13, // Томатна паста
            'quantity' => '3',
            'unit' => 'ст.л.',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 14, // Часник
            'quantity' => '2',
            'unit' => 'зубчики',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 5, // Сіль
            'quantity' => 'за смаком',
            'unit' => '',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 15, // Сметана
            'quantity' => '100',
            'unit' => 'г',
        ]);
        RecipeIngredient::create([
            'recipe_id' => 2,
            'ingredient_id' => 16, // Зелень (петрушка, кріп)
            'quantity' => 'за смаком',
            'unit' => '',
        ]);
    }
}
