<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    $title = $faker->unique()->sentence(5);
    $title = substr($title, 0, strlen($title) - 1);
    return [
        'sku' => $faker->unique()->randomNumber(6),
        'ean' => $faker->unique()->ean13,
        'name' => $title,
        'url' => str_slug($title),
        'description' => $faker->paragraph(10),
        'short_description' => $faker->text(100),
        'price' => $faker->numberBetween(10, 100),
        'tax_percent' => 20
    ];
});
