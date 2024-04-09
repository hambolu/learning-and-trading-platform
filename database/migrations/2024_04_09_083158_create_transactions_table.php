<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('transaction_ref');
            $table->integer('user_id');
            $table->enum('type', ['deposit', 'withdrawal', 'purchase']);
            $table->decimal('amount', 10, 2);
            $table->timestamps();
        });

        // Add more tables as needed based on the provided documentation
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
