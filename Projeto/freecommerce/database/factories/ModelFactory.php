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

$factory->define(FreeCommerce\User::class, function (Faker\Generator $faker) {
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
        'idUser' => $faker->numberBetween(1, 11),
        'idCompetencia' => $faker->numberBetween(1, 117),
        'titulo' => $faker->word,
        'descricao' => $faker->text,
        //'duracao' => $faker->text,
    ];
});

$factory->define(FreeCommerce\Comentario::class, function (Faker\Generator $faker) {
    return [
        'idServico' => $faker->numberBetween(1, 100),
        'idUser' => $faker->numberBetween(1, 11),
        //'idComentario' => $faker->optional($weight = 0.1)->numberBetween(1, 100),
        'descricao' => $faker->text,
        'avaliacao' => $faker->numberBetween(0, 5),
    ];
});

$factory->define(FreeCommerce\Tag::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->unique()->word,
    ];
});

$factory->define(FreeCommerce\Servico_has_tag::class, function (Faker\Generator $faker) {
    return [
        'idServico' => $faker->numberBetween(1, 100),
        'idTag' => $faker->numberBetween(1, 100),
    ];
});

$factory->define(FreeCommerce\Extra::class, function (Faker\Generator $faker) {
    return [
        'idServico' => $faker->numberBetween(1, 100),
        'descricao' => $faker->text,
        'valor' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
    ];
});

$factory->define(FreeCommerce\Solicitacao::class, function (Faker\Generator $faker) {
    return [
        'idUser' => $faker->numberBetween(1, 11),
        'idServico' => $faker->numberBetween(1, 100),
    ];
});

$factory->define(FreeCommerce\Solicitacao_has_Extra::class, function (Faker\Generator $faker) {
    return [
        'idSolicitacao' => $faker->numberBetween(1, 50),
        'idExtra' => $faker->numberBetween(1, 50),
    ];
});