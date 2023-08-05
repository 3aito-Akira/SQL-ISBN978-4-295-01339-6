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
            $table->date('date')->primary();
            $table->char('order_index',12)->primary();
            $table->unsignedInteger('order_branch')->primary();
            $table->char('code',5)->nullable(false);
            $table->unsignedInteger('volume')->nullable(false);
            $table->unsignedInteger('discount')->nullable(true);
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
