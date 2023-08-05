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
        Schema::create('goods', function (Blueprint $table) {
            //英字1字数字4字
            $table->char('code',5)->primary();
            $table->string('name',50)->nullable(false);
            $table->unsignedInteger('price')->nullable(false);
            $table->char('kind',1)->nullable(false);
            $table->char('relation',5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goods');
    }
};
