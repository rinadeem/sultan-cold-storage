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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customerCode')->index('customerCode');
            $table->decimal('loanAccountID')->index('loanAccountID');
            $table->enum('customer_type', ['Farmer', 'Agent)']);
            $table->string('primary_contact');
            $table->string('secondary_contact');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('nid')->comment('National Identity Card');
            $table->decimal('loan_amount', 10,5);
            $table->string('rateID')->index('rateID');
            $table->decimal('interestRate', 3,2)->index('interestRate');
            $table->decimal('total_repayment', 10,5);
            $table->integer('loanTermMonths')->index('loanTermMonths');
            $table->date('loanDate')->index('loanDate');
            $table->dateTime('loanTermDate')->index('loanTermDate');
            $table->enum('loanStatus', [0, 1])->index('loanStatus');
            $table->string('created_by');
            $table->foreign('customerCode')->references('customerCode')->on('customers')->onDelete('cascade');
            $table->foreign('rateID')->references('id')->on('interest_rates')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
