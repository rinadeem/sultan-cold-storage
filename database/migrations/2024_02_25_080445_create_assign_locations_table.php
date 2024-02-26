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
        Schema::create('assign_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('deed_id');
            $table->unsignedBigInteger('locationID')->index('locationID');
            $table->decimal('noOfSack', 5,2)->index('noOfSack');
            $table->string('created_by');
            $table->foreign('deed_id')->references('id')->on('deeds')->onDelete('cascade');
            $table->foreign('locationID')->references('id')->on('locations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_locations');
    }
};
