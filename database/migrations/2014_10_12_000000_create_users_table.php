<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bagian')->nullable();
            $table->string('status')->nullable();
            $table->string('tentang')->nullable();
            $table->string('notelp')->nullable();
            $table->string('alamat')->nullable();
            $table->string('biro')->nullable();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('ttd')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('role');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->default('user.png');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
