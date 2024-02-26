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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chamberID')->index('chamberID');
            $table->unsignedBigInteger('floorID')->index('floorID');
            $table->unsignedBigInteger('pocketID')->index('pocketID');
            $table->string('locationName')->index('locationName');
            $table->enum('status', [0, 1]);
            $table->string('created_by');
            $table->foreign('chamberID')->references('id')->on('chambers')->onDelete('cascade');
            $table->foreign('floorID')->references('id')->on('floors')->onDelete('cascade');
            $table->foreign('pocketID')->references('id')->on('pockets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
