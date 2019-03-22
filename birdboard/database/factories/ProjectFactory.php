<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->text(100), // The limit that the project card will show
        'notes' => 'Foo bar notes',
        'owner_id' => factory(App\User::class)
    ];
});
