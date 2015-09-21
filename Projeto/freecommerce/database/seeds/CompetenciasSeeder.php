<?php

use Illuminate\Database\Seeder;

class CompetenciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competencias')->delete();//truncate();

        factory('FreeCommerce\Competencia')->create([
            'id' => 1,
            'idCategoria' => 1,
            'nome' => 'Desenhos Animados e Caricaturas'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 2,
            'idCategoria' => 1,
            'nome' => 'Criar Logotipo'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 3,
            'idCategoria' => 1,
            'nome' => 'Ilustracao Digital'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 4,
            'idCategoria' => 1,
            'nome' => 'Capa de Ebook'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 5,
            'idCategoria' => 1,
            'nome' => 'Fotografia e Photoshop'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 6,
            'idCategoria' => 1,
            'nome' => 'Flyers e Folhetos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 7,
            'idCategoria' => 1,
            'nome' => 'Cartao de Visitas'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 8,
            'idCategoria' => 1,
            'nome' => 'Banner Ads'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 9,
            'idCategoria' => 1,
            'nome' => 'Social Media Design'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 10,
            'idCategoria' => 1,
            'nome' => '3D & 2D Models'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 11,
            'idCategoria' => 1,
            'nome' => 'Web & Mobile Design'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 12,
            'idCategoria' => 1,
            'nome' => 'Apresentacoes & Infograficos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 13,
            'idCategoria' => 1,
            'nome' => 'Convites'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 14,
            'idCategoria' => 1,
            'nome' => 'Camisetas'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 15,
            'idCategoria' => 1,
            'nome' => 'Desenho Vetorizado'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 16,
            'idCategoria' => 1,
            'nome' => 'Outros em Design Grafico'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 17,
            'idCategoria' => 2,
            'nome' => 'Analise Web'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 18,
            'idCategoria' => 2,
            'nome' => 'Artigos e Textos Web'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 19,
            'idCategoria' => 2,
            'nome' => 'Mencoes em Blogs'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 20,
            'idCategoria' => 2,
            'nome' => 'Investigacao de Dominios'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 21,
            'idCategoria' => 2,
            'nome' => 'Paginas de Fans'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 22,
            'idCategoria' => 2,
            'nome' => 'Investigacao de Palavras-Chave'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 23,
            'idCategoria' => 2,
            'nome' => 'SEO'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 24,
            'idCategoria' => 2,
            'nome' => 'Marcadores'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 25,
            'idCategoria' => 2,
            'nome' => 'Marketing Social'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 26,
            'idCategoria' => 2,
            'nome' => 'Gerar Trafego'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 27,
            'idCategoria' => 2,
            'nome' => 'Video Marketing'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 28,
            'idCategoria' => 2,
            'nome' => 'Reviews'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 29,
            'idCategoria' => 2,
            'nome' => 'Outros em Marketing'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 30,
            'idCategoria' => 3,
            'nome' => 'Redacao de Artigos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 31,
            'idCategoria' => 3,
            'nome' => 'Escrita Criativa'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 32,
            'idCategoria' => 3,
            'nome' => 'Traducao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 33,
            'idCategoria' => 3,
            'nome' => 'Transcricoes'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 34,
            'idCategoria' => 3,
            'nome' => 'Curriculos e Cartas de Apresentacao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 35,
            'idCategoria' => 3,
            'nome' => 'Revisao de Textos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 36,
            'idCategoria' => 3,
            'nome' => 'Comunicado de Imprensa'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 37,
            'idCategoria' => 3,
            'nome' => 'Artigos e Posts em Blogs'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 38,
            'idCategoria' => 3,
            'nome' => 'Pesquisas e Resumos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 39,
            'idCategoria' => 3,
            'nome' => 'Escrita Legal'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 40,
            'idCategoria' => 3,
            'nome' => 'Outros em Escrita e Traducao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 41,
            'idCategoria' => 4,
            'nome' => 'Comercias'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 42,
            'idCategoria' => 4,
            'nome' => 'Montagem e Pos-Producao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 43,
            'idCategoria' => 4,
            'nome' => 'Animacoes em 3D'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 44,
            'idCategoria' => 4,
            'nome' => 'Testemunhas e Comentarios de Atores'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 45,
            'idCategoria' => 4,
            'nome' => 'Marionetes'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 46,
            'idCategoria' => 4,
            'nome' => 'Animacao em Stop Motion'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 47,
            'idCategoria' => 4,
            'nome' => 'Introducoes'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 48,
            'idCategoria' => 4,
            'nome' => 'Outros em Video e Animacao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 49,
            'idCategoria' => 5,
            'nome' => 'Edicao de Audio e Masterizacao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 50,
            'idCategoria' => 5,
            'nome' => 'Jingles'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 51,
            'idCategoria' => 5,
            'nome' => 'Narracao e Dublagem'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 52,
            'idCategoria' => 5,
            'nome' => 'Efeitos de Som'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 53,
            'idCategoria' => 5,
            'nome' => 'Sessoes Musicais'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 54,
            'idCategoria' => 5,
            'nome' => 'Producoes e Composicoes'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 55,
            'idCategoria' => 5,
            'nome' => 'Cantores e Compositores'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 56,
            'idCategoria' => 5,
            'nome' => 'Outros em Musica e Audio'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 57,
            'idCategoria' => 6,
            'nome' => 'Wordpress'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 58,
            'idCategoria' => 6,
            'nome' => 'Programacao Web'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 59,
            'idCategoria' => 6,
            'nome' => 'Apps Moveis & Web'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 60,
            'idCategoria' => 6,
            'nome' => 'Construtores de Website & CMS'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 61,
            'idCategoria' => 6,
            'nome' => 'Coverter Arquivos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 62,
            'idCategoria' => 6,
            'nome' => 'E-Commerce'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 63,
            'idCategoria' => 6,
            'nome' => 'Teste de Usuario'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 64,
            'idCategoria' => 6,
            'nome' => 'Garantia de Qualidade'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 65,
            'idCategoria' => 6,
            'nome' => 'Banco de Dados'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 66,
            'idCategoria' => 6,
            'nome' => 'Aplicativos para Desktop'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 67,
            'idCategoria' => 6,
            'nome' => 'Analise de Dados & Relatorios'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 68,
            'idCategoria' => 6,
            'nome' => 'Suporte & TI'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 69,
            'idCategoria' => 6,
            'nome' => 'Outros em Programacao e Tecnologia'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 70,
            'idCategoria' => 7,
            'nome' => 'Tenha sua Marca de Publicidade'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 71,
            'idCategoria' => 7,
            'nome' => 'Flyers e Volantes'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 72,
            'idCategoria' => 7,
            'nome' => 'Cartazes Humanos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 73,
            'idCategoria' => 7,
            'nome' => 'Modelos Animais'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 74,
            'idCategoria' => 7,
            'nome' => 'Publicidade Exterior'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 75,
            'idCategoria' => 7,
            'nome' => 'Publicidade do Radio'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 76,
            'idCategoria' => 7,
            'nome' => 'Producao de Musica'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 77,
            'idCategoria' => 7,
            'nome' => 'Publicidade me Banner'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 78,
            'idCategoria' => 7,
            'nome' => 'Outros em Publicidade'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 79,
            'idCategoria' => 8,
            'nome' => 'Plano de Negocios'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 80,
            'idCategoria' => 8,
            'nome' => 'Orientacao Proficional'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 81,
            'idCategoria' => 8,
            'nome' => 'Pesquisas de Mercado'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 82,
            'idCategoria' => 8,
            'nome' => 'Apresentacoes'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 83,
            'idCategoria' => 8,
            'nome' => 'Assistente Visual'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 84,
            'idCategoria' => 8,
            'nome' => 'Conselho Empresarial'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 85,
            'idCategoria' => 8,
            'nome' => 'Servicos de Brading'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 86,
            'idCategoria' => 8,
            'nome' => 'Conselhos Financeiros'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 87,
            'idCategoria' => 8,
            'nome' => 'Consultoria Juridica'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 88,
            'idCategoria' => 8,
            'nome' => 'Outros em Negocios'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 89,
            'idCategoria' => 9,
            'nome' => 'Cura Espiritual e Espiritismo'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 90,
            'idCategoria' => 9,
            'nome' => 'Astrologia e Adivinhacao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 91,
            'idCategoria' => 9,
            'nome' => 'Aulas Online'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 92,
            'idCategoria' => 9,
            'nome' => 'Saude e Fitness'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 93,
            'idCategoria' => 9,
            'nome' => 'Viagens'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 94,
            'idCategoria' => 9,
            'nome' => 'Conselhos aos Casais'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 95,
            'idCategoria' => 9,
            'nome' => 'Receitas'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 96,
            'idCategoria' => 9,
            'nome' => 'Maquiagens'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 97,
            'idCategoria' => 9,
            'nome' => 'Dieta e Perder Peso'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 98,
            'idCategoria' => 9,
            'nome' => 'Cuidado com os Animais'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 99,
            'idCategoria' => 9,
            'nome' => 'Dicas para Pais'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 100,
            'idCategoria' => 9,
            'nome' => 'Outros em Estilo de Vida'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 101,
            'idCategoria' => 10,
            'nome' => 'Video-Massagens'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 102,
            'idCategoria' => 10,
            'nome' => 'Arte e Artesanato'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 103,
            'idCategoria' => 10,
            'nome' => 'Presentes Originais'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 104,
            'idCategoria' => 10,
            'nome' => 'Cartoes de Felicidades'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 105,
            'idCategoria' => 10,
            'nome' => 'Joias Feitas a Mao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 106,
            'idCategoria' => 10,
            'nome' => 'Presentes para Nerds'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 107,
            'idCategoria' => 10,
            'nome' => 'Artesanato Reciclado'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 108,
            'idCategoria' => 10,
            'nome' => 'Outros em Presentes'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 109,
            'idCategoria' => 11,
            'nome' => 'So por Diversao'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 110,
            'idCategoria' => 11,
            'nome' => 'Sua Menssagem'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 111,
            'idCategoria' => 11,
            'nome' => 'Extremamente Raro'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 112,
            'idCategoria' => 11,
            'nome' => 'Imitadores de Famosos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 113,
            'idCategoria' => 11,
            'nome' => 'Brincadeiras'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 114,
            'idCategoria' => 11,
            'nome' => 'Dancarinos'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 115,
            'idCategoria' => 11,
            'nome' => 'Aventureiros e Acrobatas'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 116,
            'idCategoria' => 11,
            'nome' => 'Outros em Diverssao e Bizarrice'
        ]);

        factory('FreeCommerce\Competencia')->create([
            'id' => 117,
            'idCategoria' => 12,
            'nome' => 'Outros'
        ]);
    }
}