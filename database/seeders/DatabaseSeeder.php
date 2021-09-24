<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FornecedorSeeder::class);
        $this->call(SiteContatoSeeder::class);
    }
}
