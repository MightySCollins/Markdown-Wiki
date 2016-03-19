<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

// todo: Improve Generation to not use fixed numbers

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->realText,
        // 'slug' => function (array $post) {
        //     return slug($post['title']);
        // },
        'slug' => $faker->slug,
        'category_id' => $faker->numberBetween(0, 5),
        'public' => $faker->boolean(80),
        'views' => $faker->randomNumber,
    ];
});

$factory->define(App\Models\Edit::class, function (Faker\Generator $faker) {
    return [
        'post_id' => $faker->numberBetween(0, 20),
        'user_id' => $faker->numberBetween(0, 20),
        'content' => implode("\n", $faker->paragraphs),
    ];
});

$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        // 'slug' => function (array $category) {
        //     return slug($category['name']);
        // },
        'slug' => $faker->slug,
        'user_id' => $faker->numberBetween(0, 20),
    ];
});