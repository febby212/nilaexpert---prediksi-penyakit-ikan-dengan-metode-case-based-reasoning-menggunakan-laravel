<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyakit_solusis', function (Blueprint $table) {
            $table->string('id')->primary()->unique();
            $table->string('kd_penyakit');
            $table->string('nama_penyakit');
            $table->text('definisi');
            $table->text('solusi');
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakit_solusis');
    }
};
