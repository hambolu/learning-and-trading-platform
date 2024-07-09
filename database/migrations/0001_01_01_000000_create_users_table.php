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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('referral_code')->nullable();
            $table->string('valid_id')->nullable();
            $table->string('bank')->nullable();
            $table->string('account_name')->nullable();
            $table->integer('account_number')->nullable();
            $table->boolean('status')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->integer('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        // Assuming you have roles for users
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('role_id');
            $table->timestamps();
        });

        // Assuming you have a wallet system for users
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->decimal('balance', 10, 2)->default(0);
            $table->timestamps();
        });

        // Assuming you have referral relationships between users
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->integer('referrer_id');
            $table->integer('referred_id');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('referrals');
        Schema::dropIfExists('wallets');
        Schema::dropIfExists('user_roles');
        Schema::dropIfExists('users');
    }
};
