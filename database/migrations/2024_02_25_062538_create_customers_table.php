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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customerCode')->index('customerCode');
            $table->string('mobileNo')->index('mobileNo');
            $table->enum('customer_type', ['Farmer', 'Agent)']);
            $table->string('address');
            $table->string('nid_trade_licanse');
            $table->enum('status', [0, 1]);
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
