<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id_client');
            $table->string('nom');
            $table->string('prenom');
            $table->date('date_de_naissance');
            $table->bigInteger('cni');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('mail');
            $table->string('profession');
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
        Schema::dropIfExists('clients');
    }
}
