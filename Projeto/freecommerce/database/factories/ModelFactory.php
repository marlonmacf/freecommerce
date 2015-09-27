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

$factory->define(FreeCommerce\Servico::class, function (Faker\Generator $faker) {
    return [
        'idPerfil' => $faker->numberBetween(1, 11),
        'idCompetencia' => $faker->numberBetween(1, 117),
        'titulo' => $faker->word,
        'descricao' => $faker->text,
        //'duracao' => $faker->text,
    ];
});

$factory->define(FreeCommerce\Comentario::class, function (Faker\Generator $faker) {
    return [
        'idServico' => $faker->numberBetween(1, 1000),
        'idPerfil' => $faker->numberBetween(1, 11),
        //'idComentario' => null,
        'descricao' => $faker->text,
        'avaliacao' => $faker->numberBetween(0,5),
    ];
});