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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido')->nullable();
            $table->string('matricula')->nullable();
            $table->string('email');
            $table->string('password');

            //$table->foreign('id_career')->references('id')->on('careers');
            $table->foreignId('id_carrera')
                ->constrained('carreras')
                ->cascadeOnUpdate();
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
        Schema::dropIfExists('users');
    }
};
