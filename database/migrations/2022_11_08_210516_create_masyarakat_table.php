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
    Schema::create('masyarakat', function (Blueprint $table) {
      $table->engine = env('DB_STORAGE_ENGINE', 'InnoDB');
      $table->charset = env('DB_CHARSET', 'utf8');
      $table->collation = env('DB_COLLATION', 'utf8_unicode_ci');
      $table->integer('id_masyarakat', true);
      $table->integer('id_pelamar');
      $table->string('nama_lengkap');
      $table->enum('jenis_kelamin', ['L', 'P']);
      $table->string('tempat_lahir', 100);
      $table->date('tanggal_lahir');
      $table->text('alamat_tempat_tinggal');
      $table->string('no_telepon', 20);
      $table->string('foto')->nullable();

      // Foreign key untuk id_pelamar
      $table
        ->foreign('id_pelamar')
        ->references('id_pelamar')
        ->on('pelamar')
        ->cascadeOnUpdate()
        ->cascadeOnDelete();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('masyarakat');
  }
};
