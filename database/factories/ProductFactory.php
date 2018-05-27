<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //Create seeding to test the database 
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'year' => $faker->numberBetween(1900, 2018),
        'price' => $faker->numberBetween(20, 400),
        'discount' => $faker->numberBetween(0, 50)

    ];
});
