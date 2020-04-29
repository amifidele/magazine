<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'article_id'=> '5',
        'name'=> $faker->name,
        'email'=>$faker->unique()->safeEmail,
        'comment'=>$faker->paragraph,
    ];
});
