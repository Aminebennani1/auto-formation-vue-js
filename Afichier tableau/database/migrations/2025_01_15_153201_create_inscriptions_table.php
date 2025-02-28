<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apprenant_id');
            $table->unsignedBigInteger('atelier_id');
            $table->unsignedBigInteger('groupe_id')->nullable();
            $table->dateTime('date_inscription');
            $table->foreign('apprenant_id')->references('id')->on('apprenants')->onDelete('cascade');
            $table->foreign('atelier_id')->references('id')->on('ateliers')->onDelete('cascade');
            $table->foreign('groupe_id')->references('id')->on('groupes')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
}
