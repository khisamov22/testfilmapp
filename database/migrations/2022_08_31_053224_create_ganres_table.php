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
        Schema::create('ganres', function (Blueprint $table) {
            $table->id();
            
            $table->integer("comedy")->nullable();
            $table->integer("cartoons")->nullable();
            $table->integer("fiction")->nullable();
            $table->integer("horror")->nullable();
            $table->integer("thrillers")->nullable();
            $table->integer("militants")->nullable();
            $table->integer("melodramas")->nullable();
            $table->integer("adventure")->nullable();
            $table->integer("anime")->nullable();
            $table->integer("dramas")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ganres');
    }
};
