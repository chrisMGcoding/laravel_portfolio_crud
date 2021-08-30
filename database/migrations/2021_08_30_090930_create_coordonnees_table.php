<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoordonneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coordonnees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('anniversaire', 20);
            $table->string('website', 45);
            $table->string('phone', 20);
            $table->string('ville', 30);
            $table->string('age', 5);
            $table->string('diplome', 40);
            $table->string('email', 40);
            $table->string('freelance', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coordonnees');
    }
}
