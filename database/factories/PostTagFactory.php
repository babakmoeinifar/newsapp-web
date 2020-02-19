<?php

/** @var Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$faker = new Faker();
for ($i = 0; $i < 1500; $i++){
    DB::table('post_tag')->updateOrInsert(
        ['post_id' => $faker->numberBetween(1, 1500)],
        ['tag_id' => $faker->numberBetween(1, 50)],

        );
}
