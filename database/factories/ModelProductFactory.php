<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'detail'=>$faker->paragraph,
        'price'=>$faker->numberBetween(10,10000),
        'stock'=>$faker->randomDigit,
        'discount'=>$faker->numberBetween(1,90)
    ];
});
