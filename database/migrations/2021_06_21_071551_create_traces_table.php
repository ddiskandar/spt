<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('activity_id')->nullable();

            // melanjutkan
            $table->boolean('melanjutkan_linear')->nullable();
            $table->date('melanjutkan_tanggal_mulai')->nullable();
            $table->string('melanjutkan_kampus')->nullable();
            $table->string('melanjutkan_prodi')->nullable();

            // bekerja
            $table->boolean('bekerja_linear')->nullable();
            $table->date('bekerja_tanggal_mulai')->nullable();
            $table->boolean('bekerja_sebelum_lulus')->nullable();
            $table->integer('bekerja_masa_tunggu')->nullable();
            $table->boolean('bekerja_melalui_bkk')->nullable();
            $table->string('bekerja_nama')->nullable();
            $table->foreignId('dudika_id')->nullable();
            $table->foreignId('bekerja_bidang_bisnis')->nullable();
            $table->foreignId('profession_id')->nullable();
            $table->foreignId('bond_id')->nullable();
            $table->foreignId('bekerja_penghasilan')->nullable();
            $table->boolean('bekerja_gaji_standar_umr')->nullable();

            // wirausaha
            $table->string('wirausaha_nama')->nullable();
            $table->foreignId('wirausaha_bidang_bisnis')->nullable();
            $table->foreignId('wirausaha_penghasilan')->nullable();

            // selain bekerja
            $table->boolean('pernah_bekerja')->nullable();

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
        Schema::dropIfExists('traces');
    }
}
