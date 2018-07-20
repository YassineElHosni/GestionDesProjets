<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'Nom' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role' => $faker->randomElement(['ADMIN','GERANT','CHEF_PROJET','EMPLOYE']),
        'commentaire' => $faker->realText($maxNbChars = 100),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Tache::class, function (Faker\Generator $faker) {
    static $password;

return [
	'description' =>$faker->realText($maxNbChars = 100),
	'date_limite' =>$faker->date($format = 'Y-m-d', $max = 'now'),
	'état' =>  $faker->randomElement(['en-coure','fini','validée']),
	'déroulement' =>  $faker->randomDigit ,
  'priorité' =>  $faker->randomDigit ,
	'commentaire' =>  $faker->text,
];
});

$factory->define(App\Projet::class, function (Faker\Generator $faker) {
    static $password;

return [
	'intitulee' =>$faker->realText($maxNbChars = 100),
	'description' =>$faker->realText($maxNbChars = 100),
	'date_limite' =>$faker->date($format = 'Y-m-d', $max = '2018-08-20'),
  'date_debut' =>$faker->date($format = 'Y-m-d', $max = '2018-08-01'),
  'date_fin' =>$faker->date($format = 'Y-m-d', $max = '2018-08-25'),
	'deplacement' =>  $faker->randomElement(['O','N']),
  	'état' =>  $faker->randomElement(['en-coure','clos']),
	'commentaire' =>  $faker->text,
];
});
