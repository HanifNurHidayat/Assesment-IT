<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable(false);
            $table->string('email', 100)->nullable(false);
            $table->string('telepon', 15)->nullable(false);
            $table->text('alamat')->nullable(false);
            $table->enum('jenis_kelamin', ['pria', 'wanita'])->nullable(false);
            $table->string('tempat_lahir', 50)->nullable(false);
            $table->date('tanggal_lahir')->nullable(false);
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
        Schema::dropIfExists('karyawan');
    }
}
