<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjustesProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiais', function (Blueprint $table){
            $table->id();
            $table->string('filial',30);
            $table->timestamps();
        });
        Schema::create('produtos_filiais', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_maximo');
            $table->integer('estoque_minimo');
            $table->timestamps();

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
        Schema::table('produtos', function (Blueprint $table){
            $table->dropColumn(['preco_venda','estoque_maximo','estoque_minimo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table){
            $table->decimal('preco_venda',8,2);
            $table->integer('estoque_maximo');
            $table->integer('estoque_minimo');
        });

        Schema::dropDatabaseIfExists('produto_filiais');
        Schema::dropDatabaseIfExists('filiais');
    }
}
