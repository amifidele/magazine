<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => '2',
        'category_id' => '1',
        'title' => $faker->sentence(5),
        'introduction'=> $faker->paragraph(),
        'description'=> $faker->text(),
    ];
});
