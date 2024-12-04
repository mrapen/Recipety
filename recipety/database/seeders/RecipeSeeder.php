<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\RecipeIngredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mlynci = Recipe::create([
            'title' => 'Млинці',
            'description' => 'Смачні та пухкі млинці, які можна подавати з варенням, сметаною чи медом.',
            'instructions' => '1. У великій мисці збийте яйця з молоком.
                                2. Додайте борошно, цукор і сіль. Добре перемішайте, щоб не було грудок.
                                3. На розігріту сковороду змащену олією влийте невелику кількість тіста та рівномірно розподіліть.
                                4. Обсмажуйте млинці з обох боків до золотистого кольору.',
            'image' => 'images/pancakes.jpg',
            'prep_time' => 10, // хвилин
            'cook_time' => 20, // хвилин
            'category_id' => 1, // Сніданки
        ]);

        // Рецепт "Борщ"
        $borsch = Recipe::create([
            'title' => 'Борщ',
            'description' => 'Традиційний український борщ із насиченим смаком, подається зі сметаною та зеленню.',
            'instructions' => '1. Підготуйте бульйон: у каструлі зваріть м’ясо до готовності.
                                2. Додайте нарізану картоплю, моркву і цибулю, дайте покипіти 10 хвилин.
                                3. Обсмажте буряк із томатною пастою на сковороді, додайте до борщу.
                                4. Додайте капусту, часник і спеції. Варіть ще 15 хвилин.
                                5. Подавайте зі сметаною і зеленню.',
            'image' => 'images/borch.jpg',
            'prep_time' => 30, // хвилин
            'cook_time' => 60, // хвилин
            'category_id' => 4, // Супи
        ]);

        // Інгредієнти для млинців
        RecipeIngredient::create([
            'recipe_id' => $mlynci->id,
            'ingredient_id' => 1, // Яйце
            'quantity' => '3',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $mlynci->id,
            'ingredient_id' => 2, // Молоко
            'quantity' => '500',
            'unit' => 'мл',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $mlynci->id,
            'ingredient_id' => 3, // Борошно
            'quantity' => '250',
            'unit' => 'г',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $mlynci->id,
            'ingredient_id' => 4, // Цукор
            'quantity' => '2',
            'unit' => 'ст.л.',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $mlynci->id,
            'ingredient_id' => 5, // Сіль
            'quantity' => '1',
            'unit' => 'дрібка',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $mlynci->id,
            'ingredient_id' => 6, // Олія
            'quantity' => '2',
            'unit' => 'ст.л.',
        ]);



        // Інгредієнти для борщу
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 7, // М’ясо
            'quantity' => '500',
            'unit' => 'г',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 8, // Картопля
            'quantity' => '3',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 9, // Морква
            'quantity' => '1',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 10, // Цибуля
            'quantity' => '1',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 11, // Буряк
            'quantity' => '2',
            'unit' => 'шт',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 12, // Капуста
            'quantity' => '300',
            'unit' => 'г',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 13, // Томатна паста
            'quantity' => '3',
            'unit' => 'ст.л.',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 14, // Часник
            'quantity' => '2',
            'unit' => 'зубчики',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 5, // Сіль
            'quantity' => 'за смаком',
            'unit' => '',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 15, // Сметана
            'quantity' => '100',
            'unit' => 'г',
        ]);
        RecipeIngredient::create([
            'recipe_id' => $borsch->id,
            'ingredient_id' => 16, // Зелень (петрушка, кріп)
            'quantity' => 'за смаком',
            'unit' => '',
        ]);
    }
}
