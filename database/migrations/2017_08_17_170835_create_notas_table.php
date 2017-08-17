<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->double('valor');
            $table->integer('aluno_id')->unsigned();
        });

        Schema::table('nota', function (Blueprint $table) {
            $table->foreign('aluno_id')->reference('id')->on('aluno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('note', function($table) {
            $table->dropColumn('aluno_id');
        });

        Schema::dropIfExists('nota');
    }
}
