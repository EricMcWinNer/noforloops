<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Wallet;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Wallet::class, function (Faker $faker) {
    return [
        "amount" => random_int(1111, 999999),
        "key" => Str::random(10),
    ];
});
