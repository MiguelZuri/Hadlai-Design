<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Faker\Provider\Base;
use Faker\Provider\Lorem;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word,
        'estilo' => $faker->word,
        'tipo_area' => $faker->word,
        'precio' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 10000),
        'cantidad' => $faker->randomDigitNotNull,
        'categoria_id' => $faker->randomDigitNotNull,
    ];
});
