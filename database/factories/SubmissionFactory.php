<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Submission;
use Faker\Generator as Faker;

$factory->define(Submission::class, function (Faker $faker) {

    $gender = $faker->randomElement([Submission::GENDER_MALE, Submission::GENDER_FEMALE]);

    return [
        'name' => $faker->name($gender),
        'gender' => $gender,
        'date_of_birth' => $faker->date(),
        'city_of_residence' => $faker->city,
        'nationality' => $faker->word,
        'marital_status' => $faker->randomElement([Submission::STATUS_SINGLE, Submission::STATUS_MARRIED, Submission::STATUS_UNAVAILABLE]),
        'major' => $faker->word,
        'degree' => $faker->sentence(1),
        'university' => $faker->sentence(1),
        'years_of_experience' => $faker->sentence(1),
        'employment_status' => $faker->randomElement([Submission::EMPLOYED, Submission::UNEMPLOYED]),
        'expected_salary' => $faker->randomNumber(5),
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->email,
        'visa_status' => $faker->randomElement([Submission::VISA_VISIT, Submission::VISA_RESIDENCE, Submission::VISA_EMPLOYMENT]),
        'bio' => $faker->text
    ];
});
