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
        Schema::create('recensionis', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('auto_id');
            $table->string('comment');
            $table->integer('rating');
            $table->foreign('auto_id')->references('id')->on('auto')->onDelete('cascade');
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
        Schema::dropIfExists('recensionis');
    }
};
