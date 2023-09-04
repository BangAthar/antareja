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
        Schema::create('nilaiformasis', function (Blueprint $table) {
            $table->id();
            $table->string('team_id');
            $table->string('materi_1')->default('0');
            $table->string('materi_2')->default('0');
            $table->string('materi_3')->default('0');
            $table->string('materi_4')->default('0');
            $table->string('materi_5')->default('0');
            $table->string('materi_6')->default('0');
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
        Schema::dropIfExists('nilaiformasis');
    }
};
