<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            
            $table->increments('id_compte');
            $table->string('numero_compte');
            $table->integer('solde');
            $table->integer('id_client')->unsigned();
            $table->foreign('id_client')->references('id_client')->on('clients');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
