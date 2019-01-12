<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'description' => $faker->text(100), // The limit that the project card will show
        'owner_id' => function() {
            return factory(App\User::class)->create()->id;
        }
    ];
});
