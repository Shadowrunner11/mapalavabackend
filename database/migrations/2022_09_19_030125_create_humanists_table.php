<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humanists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('rating');
            $table->string('departamento');
            $table->string('apelativo');
            $table->string('descripcion');
            $table->string('name');
            $table->string('lastName');
            $table->string('fotoUrl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('humanists');
    }
};
