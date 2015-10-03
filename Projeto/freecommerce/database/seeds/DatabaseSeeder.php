<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoriasSeeder::class);
        $this->call(CompetenciasSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(ServicosSeeder::class);
        //$this->call(ImagensSeeder::class);
        $this->call(ComentariosSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(Servicos_has_TagsSeeder::class);
        $this->call(ExtrasSeeder::class);
        $this->call(SolicitacoesSeeder::class);
        $this->call(Solicitacoes_has_ExtrasSeeder::class);

        Model::reguard();
    }
}
