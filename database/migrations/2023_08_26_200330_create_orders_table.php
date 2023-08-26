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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');
            $table->string('payment_type');
            $table->boolean('cash')->default(false);
            $table->string('Billdenomination');
            $table->decimal('amount', 8, 2);
            $table->boolean('suggest_donation');
            $table->boolean('donation');
            $table->unsignedBigInteger('organization_id')->nullable();
            $table->unsignedBigInteger('donation_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
