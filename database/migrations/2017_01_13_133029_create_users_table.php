<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('nama_depan')->nullable();
            $table->string('nama_belakang')->nullable();
            $table->string('kelas_jurusan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->integer('no_hp')->nullable();
            $table->string('status')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('avatar')->default('no-photo.png');
            $table->string('remember_token')->nullable();
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
        Schema::drop('users');
    }
}
