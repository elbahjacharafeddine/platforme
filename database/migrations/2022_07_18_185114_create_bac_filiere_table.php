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
        Schema::create('bac_filiere', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('filiere_id')->unsigned();
            $table->integer('bac_id')->unsigned();
            $table->string('bonus_bac');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bac_filiere');
    }
};
