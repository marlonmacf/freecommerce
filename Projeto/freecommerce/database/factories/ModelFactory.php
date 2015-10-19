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
    $faker->addProvider(new Faker\Provider\pt_BR\Person($faker));
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
        'descricao' => $faker->text,
        'foto' => $faker->imageUrl($width = 300, $height = 200),
    ];
});

$factory->define(FreeCommerce\Servico::class, function (Faker\Generator $faker) {
    return [
        'idUser' => $faker->numberBetween(1, 100),
        'idCompetencia' => $faker->numberBetween(1, 117),
        'titulo' => $faker->word,
        'descricao' => $faker->text,
        'valor' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 50),
        'duracao' => $faker->numberBetween(1, 168),
        'avaliacao' => $faker->numberBetween(1, 99),
        'status' => $faker->numberBetween(1,5),
    ];
});

$factory->define(FreeCommerce\Comentario::class, function (Faker\Generator $faker) {
    return [
        'idServico' => $faker->numberBetween(1, 1000),
        'idUser' => $faker->numberBetween(1, 100),
        //'idComentario' => $faker->optional($weight = 0.1)->numberBetween(1, 100),
        'descricao' => $faker->text,
        'avaliacao' => $faker->numberBetween(0, 5),
    ];
});

$factory->define(FreeCommerce\Imagem::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->imageUrl($width = 300, $height = 200),
        'extensao' => "png",
        'idServico' => $faker->numberBetween(1, 1000),
    ];
});

$factory->define(FreeCommerce\Tag::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->unique()->word,
    ];
});

$factory->define(FreeCommerce\Servico_has_tag::class, function (Faker\Generator $faker) {
    return [
        'idServico' => $faker->numberBetween(1, 1000),
        'idTag' => $faker->numberBetween(1, 100),
    ];
});

$factory->define(FreeCommerce\Extra::class, function (Faker\Generator $faker) {
    return [
        'idServico' => $faker->numberBetween(1, 1000),
        'descricao' => $faker->text,
        'valor' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5),
    ];
});

$factory->define(FreeCommerce\Solicitacao::class, function (Faker\Generator $faker) {
    return [
        'idUser' => $faker->numberBetween(1, 100),
        'idServico' => $faker->numberBetween(1, 1000),
        'valor' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 70),
    ];
});

$factory->define(FreeCommerce\Solicitacao_has_Extra::class, function (Faker\Generator $faker) {
    return [
        'idSolicitacao' => $faker->numberBetween(1, 50),
        'idExtra' => $faker->numberBetween(1, 100),
    ];
});