<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Organization;
use Faker\Generator as Faker;

$factory->define(Organization::class, function (Faker $faker) {
    return [
        "name" => $faker->company . " " . $faker->companySuffix
    ];
});

// $factory->afterCreating(Organization::class, function($organization, $faker){
//     $organization->users()->saveMany(factory(App\Models\User::class, random_int(4, 9))->make());
// });
