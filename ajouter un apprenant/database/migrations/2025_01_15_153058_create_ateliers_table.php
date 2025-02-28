<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAteliersTable extends Migration
{
    public function up()
    {
        Schema::create('ateliers', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->dateTime('date_debut');
            $table->dateTime('date_fin');
            $table->unsignedBigInteger('administration_id');
            $table->foreign('administration_id')->references('id')->on('administrations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ateliers');
    }
}
