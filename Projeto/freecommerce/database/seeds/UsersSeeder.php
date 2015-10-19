<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();//truncate();

        factory('FreeCommerce\User')->create([
            'nome' => 'Marlon Andrel',
            'email' => 'marlonmacf@gmail.com',
            'password' => Hash::make(123456),
            'descricao' => 'Perfil de administrador para testes...',
            'foto' => 'http://lorempixel.com/640/480/?',
            //'remember_token' => Hash::make(123456),
        ]);

        factory('FreeCommerce\User', 99)->create();
    }
}
