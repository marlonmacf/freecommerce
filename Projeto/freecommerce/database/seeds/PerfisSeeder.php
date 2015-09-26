<?php

use Illuminate\Database\Seeder;

class PerfisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfis')->delete();//truncate();

        factory('FreeCommerce\Perfil')->create([
            'nome' => 'Marlon Andrel',
            'email' => 'marlonmacf@gmail.com',
            'password' => Hash::make(123456),
            'descricao' => 'Perfil de administrador para testes...',
            //'remember_token' => Hash::make(123456),
        ]);

        factory('FreeCommerce\Perfil', 10)->create();
    }
}
