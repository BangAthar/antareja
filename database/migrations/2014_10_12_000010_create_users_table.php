<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('team_id')->default(0);
            $table->string('nis');
            $table->string('nisn');
            $table->string('name');
            $table->string('sekolah');
            $table->string('email')->unique();
            $table->string('nomor_hp')->maxLength(12)->nullable();
            $table->string('instagram');
            $table->string('alamat')->nullable();
            $table->string('password');
            $table->string('team_role');
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
