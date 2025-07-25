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
        Schema::create('committee_engineer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('committee_id')->constrained('committees')->onDelete('cascade');
            $table->foreignId('engineer_id')->constrained('engineers')->onDelete('cascade');
            $table->date('dateOfAppointment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('committee_engineer');
    }
};
