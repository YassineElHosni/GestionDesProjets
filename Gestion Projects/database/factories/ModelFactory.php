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
	'description' =>$faker->realText($maxNbChars = 20),
	'date_limite' =>$faker->date($format = 'Y-m-d', $max = 'now'),
	'état' =>  $faker->randomElement(['en-cours','fini','validée']),
	'déroulement' =>  $faker->randomDigit ,
  'priorité' =>  $faker->randomDigit ,
	'commentaire' =>  $faker->text,
  'projet_id' => random_int(1, App\Projet::count())
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
  	'état' =>  $faker->randomElement(['en-cours','clos']),
	'commentaire' =>  $faker->text,
  'client_id' => random_int(1, App\Client::count()),
  'user_id' => random_int(1, App\User::count()),
];
});
$factory->define(App\Client::class, function (Faker\Generator $faker) {
    static $password;

return [
  'numeroClient' =>$faker->numberBetween($min = 10000, $max = 90000),
  'nom' =>$faker->name($gender = null|'male'|'female'),
  'email' =>$faker->email,
  'adresse' =>$faker->address,
  'num_tel' =>$faker->e164PhoneNumber,
  'commentaire' =>  $faker->realText($maxNbChars = 100),
];
});
/*
tache_user
*/
$factory->define(App\Tache_User::class, function (Faker\Generator $faker) {
    static $password;

return [
  'user_id' => random_int(1, App\User::count()),
  'tache_id' => random_int(1, App\Tache::count()),
];
});
/*
tache_user                not sure it will work more the one time hhhh
*/
$factory->define(App\Tache_User::class, function (Faker\Generator $faker) {
    static $password;

return [
  'user_id' => random_int(1, App\User::count()),
  'tache_id' => random_int(1, App\Tache::count()),
];
});
/*
projet_user                not sure it will work more the one time hhhh
*/
$factory->define(App\Projet_User::class, function (Faker\Generator $faker) {
    static $password;

return [
  'user_id' => random_int(1, App\User::count()),
  'project_id' => random_int(1, App\Tache::count()),
];
});

/*
//tache
'description','date_limite','etat','priorité','comments'

//projet
'title','description','date_limite','date_debut','date_fin','deplacement','etat','comment'

//client
'numeroClient','Nom','email','adresse','num_tel','commentaire'
*/
