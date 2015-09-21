<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();//truncate();

        factory('FreeCommerce\Categoria')->create([
            'id' => 1,
            'nome' => 'Design Grafico'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 2,
            'nome' => 'Marketing Digital'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 3,
            'nome' => 'Escrita e Traducao'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 4,
            'nome' => 'Video e Animacao'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 5,
            'nome' => 'Musica e Audio'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 6,
            'nome' => 'Programacao e Tecnologia'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 7,
            'nome' => 'Publicidade'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 8,
            'nome' => 'Negocios'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 9,
            'nome' => 'Estilo de Vida'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 10,
            'nome' => 'Presentes'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 11,
            'nome' => 'Diversao e Bizarrices'
        ]);

        factory('FreeCommerce\Categoria')->create([
            'id' => 12,
            'nome' => 'Outros'
        ]);
    }
}
