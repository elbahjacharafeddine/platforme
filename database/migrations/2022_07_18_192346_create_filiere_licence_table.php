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
        Schema::create('filiere_licence', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('filiere_id')->unsigned();
            $table->integer('licence_id')->unsigned();
            $table->string('bonus_licence')->default('0');;
            $table->string('coefficient_licence')->default('1');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('filiere_licence');
    }
};
