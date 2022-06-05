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
        Schema::create('attendece', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignID('user_id')
            ->constrained()
            ->onDelete("CASCADE")
            ->onUpdate('CASCADE');
            $table->dateTime('date');

            $table->string('name_counter');
            $table->string('b_i');
            $table->string('assunto');
            $table->string('nuit');
            $table->string('numero_telefone');
            $table->string('email');
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
        Schema::dropIfExists('attendece');
    }
};
