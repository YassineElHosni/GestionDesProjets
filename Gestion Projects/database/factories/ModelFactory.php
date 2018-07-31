<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
  static $password;
  return [
    'name' => $faker->name,
    'email' => $faker->unique()->safeEmail,
    'password' => $password ?: $password = bcrypt('secret'),
    'role' => $faker->randomElement(['ADMIN','MANAGER','PROJECT_MANAGER','EMPLOYEE']),
    'comment' => $faker->realText($maxNbChars = 20),
    'remember_token' => str_random(10),
  ];
});
$factory->define(App\Task::class, function (Faker\Generator $faker) {
  return [
    'title' =>$faker->realText($maxNbChars = 20),
    'limitDate' =>$faker->date($format = 'Y-m-d', $max = 'now'),
    'state' =>  $faker->randomElement(['IN_PROGRESS','FINISHED','VALIDATED']),
    'progress' =>  $faker->randomDigit ,
    'priority' =>  $faker->randomDigit ,
    'comment' =>  $faker->text,
    'project_id' => random_int(1, App\Project::count())
  ];
});
$factory->define(App\Project::class, function (Faker\Generator $faker) {
  return [
    'title' =>$faker->realText($maxNbChars = 15),
    'description' =>$faker->realText($maxNbChars = 20),
    'limitDate' =>$faker->date($format = 'Y-m-d', $max = '2018-08-20'),
    'startDate' =>$faker->date($format = 'Y-m-d', $max = '2018-08-01'),
    'finishDate' =>$faker->date($format = 'Y-m-d', $max = '2018-08-25'),
    'displacement' =>  $faker->boolean,
    'state' =>  $faker->boolean,
    'comment' =>  $faker->realText($maxNbChars = 20),
    'client_id' => random_int(1, App\Client::count()),
    'user_id' => random_int(1, App\User::count()),
  ];
});
$factory->define(App\Client::class, function (Faker\Generator $faker) {
  return [
    'registrationNumber' =>$faker->numberBetween($min = 10000, $max = 90000),
    'name' =>$faker->name,
    'email' =>$faker->email,
    'address' =>$faker->address,
    'phoneNumber' =>$faker->e164PhoneNumber,
    'comment' =>  $faker->realText($maxNbChars = 20),
  ];
});