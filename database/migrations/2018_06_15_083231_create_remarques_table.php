<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemarquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remarques', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('subscribers_id');
            $table->foreign('subscribers_id')->references('id')->on('subscribers');
            $table->unsignedInteger('objet_remarques_id');
            $table->foreign('objet_remarques_id')->references('id')->on('objet_remarques');
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remarques');
    }
}
