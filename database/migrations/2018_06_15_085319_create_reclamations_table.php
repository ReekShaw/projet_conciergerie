<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
           $table->increments('id');
            $table->unsignedInteger('subscribers_id');
            $table->foreign('subscribers_id')->references('id')->on('subscribers');
            $table->unsignedInteger('objet_reclamations_id');
            $table->foreign('objet_reclamations_id')->references('id')->on('objet_reclamations');
            $table->longText('description');
            $table->time('horaire_dedie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reclamations');
    }
}
