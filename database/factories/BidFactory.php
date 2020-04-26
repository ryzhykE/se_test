<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Bid;
use App\Event;
use Faker\Generator as Faker;

$factory->define(Bid::class, function (Faker $faker) {
    return [
        'id_event' => factory(Event::class)->create()->id,
        'name' => $faker->name,
        'email' => $faker->email,
        'price' => $faker->randomFloat(2,100,1000),
    ];
});
