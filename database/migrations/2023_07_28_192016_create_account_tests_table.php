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
        Schema::create('account_tests', function (Blueprint $table) {
            $table->char('accountNum',7)->primary();
            $table->string('name', 40)->nullable(false);
            //1:ordinary 2:current 3:separate
            $table->char('kind', 1)->nullable(false);
            $table->unsignedInteger('balance')->nullable(false);
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account_tests');
    }
};
