<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cars;
use Faker\Generator as Faker;

$factory->define(Cars::class, function (Faker $faker) {

         return [
             'make' => $faker->randomElement(['ford' ,'honda', 'toyota']),
             'model' => $faker->company,
             'year' => $faker->year,
         ];

});
