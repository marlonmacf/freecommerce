<?php

use Illuminate\Database\Seeder;

class ImagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imagens')->delete();

        factory('FreeCommerce\Imagem', 100)->create();
    }
}
