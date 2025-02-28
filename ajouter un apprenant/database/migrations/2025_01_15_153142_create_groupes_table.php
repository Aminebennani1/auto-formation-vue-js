<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupesTable extends Migration
{
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('atelier_id');
            $table->integer('max_participants');
            $table->foreign('atelier_id')->references('id')->on('ateliers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groupes');
    }
}
