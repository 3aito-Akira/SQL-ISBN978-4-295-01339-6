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
        Schema::create('abolished_goods', function (Blueprint $table) {
            $table->char('code',5)->primary();
            $table->string('name',50)->nullable(false);
            $table->unsignedInteger('price')->nullable(false);
            $table->char('kind',1)->nullable(false);
            $table->date('date')->nullable(false);
            $table->unsignedInteger('total')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abolished_goods');
    }
};
