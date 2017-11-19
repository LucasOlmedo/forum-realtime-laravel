<?php

use App\Reply;
use App\Thread;
use App\User;
use Faker\Factory as Faker;

$factory->define(Reply::class, function () {
    $faker = Faker::create();
    return [
        'body' => implode(' ', $faker->paragraphs),
    ];
});
