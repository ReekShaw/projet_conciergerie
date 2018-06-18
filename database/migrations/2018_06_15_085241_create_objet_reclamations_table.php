<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjetReclamationsTable extends Migration
{
    public function showObjet(){
        $objet_reclamations = DB::table('objet_reclamations')
        ->select('objet_reclamations.*')
        ->get();
        return view('tickets.reclamation', ['objet_reclamations' => $objet_reclamations]);

    }
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objet_reclamations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('objet_reclamations');
    }
}
