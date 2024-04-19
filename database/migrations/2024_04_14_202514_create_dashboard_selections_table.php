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
        Schema::create('dashboard_selections', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->boolean('dashboard')->default(false);
            $table->boolean('sma_dashboard')->default(false);
            $table->boolean('affiliate_dashboard')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboard_selections');
    }
};
