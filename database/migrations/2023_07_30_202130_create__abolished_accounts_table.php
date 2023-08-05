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
        Schema::create('abolished_accounts', function (Blueprint $table) {
            $table->char('account_id',7)->primary();
            $table->string('name', 40)->nullable(false);
            //1:ordinary 2:current 3:separate
            $table->char('kind', 1)->nullable(false);
            $table->unsignedInteger('balance')->nullable(false);
            $table->date('date')->nullable(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abolished_accounts');
    }
};
