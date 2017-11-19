<?php

use App\User;
use App\Thread;
use Faker\Factory as Faker;

$factory->define(App\Thread::class, function () {
    $faker = Faker::create();
    return [
        'title' => $faker->sentence,
        'body' => implode(' ', $faker->paragraphs),
        'user_id' => function(){
            return factory(App\User::class)->create()->id;
        },
    ];
});
