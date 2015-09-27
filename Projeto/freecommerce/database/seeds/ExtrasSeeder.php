<?php

use Illuminate\Database\Seeder;

class ExtrasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->delete();

        factory('FreeCommerce\Extra', 50)->create();
    }
}
