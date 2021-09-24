<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'PR';
        $fornecedor->email = 'fornecedor@100.com.br';
        $fornecedor->save();

        Fornecedor::create([
            'nome'=>'Fornecedor200',
            'site'=>'fornecedor200.com.br',
            'uf'=>'SC',
            'email'=>'fornecedor@200.com.br'
        ]);

        DB::table('fornecedores')->insert([
            'nome'=>'Fornecedor300',
            'site'=>'fornecedor300.com.br',
            'uf'=>'RS',
            'email'=>'fornecedor@300.com.br'
        ]);
    }
}
