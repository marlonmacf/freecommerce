<?php

use Illuminate\Database\Seeder;

class SolicitacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solicitacoes')->delete();

        factory('FreeCommerce\Solicitacao', 50)->create();
    }
}
