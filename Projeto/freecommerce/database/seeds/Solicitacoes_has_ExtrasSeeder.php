<?php

use Illuminate\Database\Seeder;

class Solicitacoes_has_ExtrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solicitacoes_has_extras')->delete();

        factory('FreeCommerce\Solicitacao_has_Extra', 300)->create();
    }
}
