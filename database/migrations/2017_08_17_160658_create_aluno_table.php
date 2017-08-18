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
            $table->increments('id')->primary();
            $table->timestamps();
            $table->string('nome',255);
            $table->string('matricula', 10);
            $table->string('cpf',11)->unique();
            $table->integer('endereco_id' )->unsigned();
        });
        Schema::table('aluno', function (Blueprint $table) {
            $table->foreign('endereco_id')->references('id')->on('endereco');
            $table->index('endereço_id', 'fk_aluno_endereco_idx');
        });

        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aluno', function($table) {
            $table->dropColumn('endereco_id');
        });

        Schema::dropIfExists('aluno');
    }
}
