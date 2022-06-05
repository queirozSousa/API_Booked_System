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
        Schema::create('perfil', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignID('user_id')
            ->constrained()
            ->onDelete("CASCADE")
            ->onUpdate('CASCADE');
            $table->dateTime('date_of_birth');
            $table->string('adress');
            $table->string('nationality');
            $table->string('b_i');
            $table->string('numero_de_conta');
            $table->string('nuit');
            $table->string('numero_telefone');
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
        Schema::dropIfExists('perfil');
    }
};
