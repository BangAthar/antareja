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
        Schema::create('nilaipbbs', function (Blueprint $table) {
            $table->id();
            $table->string('team_id');
            $table->string('materi_1')->default('0');
            $table->string('materi_2')->default('0');
            $table->string('materi_3')->default('0');
            $table->string('materi_4')->default('0');
            $table->string('materi_5')->default('0');
            $table->string('materi_6')->default('0');
            $table->string('materi_7')->default('0');
            $table->string('materi_8')->default('0');
            $table->string('materi_9')->default('0');
            $table->string('materi_10')->default('0');
            $table->string('materi_11')->default('0');
            $table->string('materi_12')->default('0');
            $table->string('materi_13')->default('0');
            $table->string('materi_14')->default('0');
            $table->string('materi_15')->default('0');
            $table->string('materi_16')->default('0');
            $table->string('materi_17')->default('0');
            $table->string('materi_18')->default('0');
            $table->string('materi_19')->default('0');
            $table->string('materi_20')->default('0');
            $table->string('materi_21')->default('0');
            $table->string('materi_22')->default('0');
            $table->string('materi_23')->default('0');
            $table->string('materi_24')->default('0');
            $table->string('materi_25')->default('0');
            $table->string('materi_26')->default('0');
            $table->string('materi_27')->default('0');
            $table->string('materi_28')->default('0');
            $table->string('materi_29')->default('0');
            $table->string('materi_30')->default('0');
            $table->string('materi_31')->default('0');
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
        Schema::dropIfExists('nilaipbbs');
    }
};
