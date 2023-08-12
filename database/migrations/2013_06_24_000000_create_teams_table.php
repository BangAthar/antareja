<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('team_name');
            $table->string('team_school')->default('');
            $table->string('team_school_address')->default('');
            $table->string('team_school_province')->default('');
            $table->string('team_school_city')->default('');
            $table->string('team_school_postal')->default('');
            $table->string('team_school_type')->default('');
            $table->string('team_school_payment')->default('');
            $table->string('team_payment_proof')->default('');
            $table->boolean('is_verified')->default(0);
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
