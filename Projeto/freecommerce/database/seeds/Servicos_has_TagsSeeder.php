<?php

use Illuminate\Database\Seeder;

class Servicos_has_TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicos_has_tags')->delete();

        factory('FreeCommerce\Servico_has_tag', 200)->create();
    }
}
