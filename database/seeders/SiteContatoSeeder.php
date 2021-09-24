<?php

namespace Database\Seeders;

use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        $contato->nome = 'Sistema SG';
        $contato->telefone = '41 995574031';
        $contato->email = 'contato@sg.com.br';
        $contato->motivo_contato = 2;
        $contato->mensagem = 'Seja bem vindo';
        $contato->save();
        */

        SiteContato::factory()->count(100)->create();
    }
}
