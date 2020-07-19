<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Likes;
use App\Model\Reply;
use App\User;
use Faker\Generator as Faker;

$factory->define(Likes::class, function (Faker $faker) {
    return [
        'reply_id' =>function(){
            return Reply::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
    ];
});
