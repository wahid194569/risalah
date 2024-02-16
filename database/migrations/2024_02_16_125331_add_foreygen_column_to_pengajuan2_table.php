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
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pembimbing_b');
            // $table->unsignedBigInteger('id_pembimbing_b');
            $table->foreign('id_pembimbing_b')->references('id')->on('pembimbing2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengajuan2', function (Blueprint $table) {
            //
        });
    }
};
