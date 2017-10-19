<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientServer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('ClientServer', function(Blueprint $table) {
                $table->increments('id');
                $table->string('code');
                $table->string('nom', 100);
                $table->string('prenom', 100);            
                $table->integer('CIN')->unique();
                $table->integer('numero')->unique();
                $table->date('date_naissance');
                $table->string('lieu_naissance', 100);
                $table->date('date_CIN');
                $table->string('lieu_CIN', 100);
                $table->string('adresse', 100);
                $table->integer('CP');
                $table->integer('Mtt');
                $table->string('Obs');
                $table->rememberToken();
                $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('ClientServer');
    }
}
