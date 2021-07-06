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

            $table->string('melanjutkan_kampus')->nullable();
            $table->string('melanjutkan_prodi')->nullable();

            $table->foreignId('dudika_id')->nullable();
            $table->string('bekerja_nama')->nullable();
            $table->boolean('bekerja_sebelum_lulus')->nullable();
            $table->boolean('bekerja_melalui_bkk')->nullable();
            $table->string('bekerja_masa_tunggu')->nullable();
            $table->boolean('bekerja_gaji_standar_umr')->nullable();
            $table->foreignId('income_id')->nullable();
            $table->foreignId('profession_id')->nullable();
            
            $table->foreignId('bond_id')->nullable();
            $table->boolean('pernah_bekerja')->nullable();
            $table->date('tanggal_masuk')->nullable();
            $table->boolean('linear')->nullable();

            $table->foreignId('business_id')->nullable();
            $table->string('business_name')->nullable();

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
