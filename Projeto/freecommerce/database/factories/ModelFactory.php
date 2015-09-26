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

$factory->define(FreeCommerce\Categoria::class, function (Faker\Generator $faker) {
    return [
        'id' => null,
        'nome' => $faker->word,
    ];
});

$factory->define(FreeCommerce\Competencia::class, function (Faker\Generator $faker) {
    return [
        'id' => null,
        'idCategoria' => null,
        'nome' => $faker->word,
    ];
});

$factory->define(FreeCommerce\Perfil::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'descricao' => $faker->text,
    ];
});
