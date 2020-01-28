<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    
    $randomando = rand(0,2);
    $gendorino = ['male','female','unspecified'];
    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'birthday'=>rand(0,31).':'.rand(0,12).':'.rand(1900,2020),
        'bio' => $faker->text(),
        'gender'=>$gendorino[$randomando],
        'city'=>$faker->randomElement(['casablanca','rabat','marakesh','tanger','agadir']),
        'image'=>$gendorino[$randomando].'.jpg',
    ];
});

























//no one will probably ever read this, me included, but it's 1/28/2020 i'm listening to https://www.youtube.com/watch?v=E2PglxuFtUg and i'm feeling very good and enjoying coding, god bless,gg