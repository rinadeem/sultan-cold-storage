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
        Schema::create('deeds', function (Blueprint $table) {
            $table->id();
            $table->string('deedNo')->index('deedNo');
            $table->unsignedBigInteger('customerCode')->index('customerCode');
            $table->enum('customer_type', ['Farmer', 'Agent)']);
            $table->string('customer_address');
            $table->enum('license_type', ['NID', 'TL)']);
            $table->string('licenseNo')->index('licenseNo');
            $table->enum('paymentMode', ['Advance', 'PostPaid)','Loan)'])->index('paymentMode');
            $table->unsignedBigInteger('productID')->index('productID');
            $table->unsignedBigInteger('measurementID')->index('measurementID');
            $table->decimal('noOfSack', 10,5)->index('noOfSack');
            $table->decimal('rate', 10,5);
            $table->decimal('fare_amount', 10,5);
            $table->decimal('loan_amount', 10,5);
            $table->decimal('adjustment_amount', 10,5);
            $table->decimal('due_amount', 10,5);
            $table->decimal('perUnitFare', 10,5)->index('perUnitFare');
            $table->dateTime('issueDate')->index('issueDate');
            $table->dateTime('expiryDate')->index('expiryDate');
            $table->string('created_by');
            $table->foreign('customerCode')->references('customerCode')->on('customers')->onDelete('cascade');
            $table->foreign('productID')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('measurementID')->references('id')->on('measurements')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deeds');
    }
};
