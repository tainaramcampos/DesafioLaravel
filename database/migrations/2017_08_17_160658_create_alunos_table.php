<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->timestamps();
            $table->string('nome',255);
            $table->string('matricula', 10);
            $table->string('cpf',11)->index();
            $table->integer('endereco_id' )->unsigned();
           // $table->foreign('endereço_id', 'fk_aluno_endereco_idx')->references('id')->on('endereco')->onDelete('cascade')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
