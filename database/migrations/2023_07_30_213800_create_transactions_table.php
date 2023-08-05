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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('cause_id')->nullable(false);
            $table->foreign('cause_id')->references('cause_id')->on('causes');
            
            $table->date('date')->nullable(false);
            $table->char('accountNum',7)->nullable(false);
            $table->unsignedInteger('deposit');
            $table->unsignedInteger('withdrawal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
