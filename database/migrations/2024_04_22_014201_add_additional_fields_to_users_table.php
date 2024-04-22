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
        Schema::table('users', function (Blueprint $table) {
            $table->string('professional_headline')->nullable();
            $table->string('facebooklink')->nullable();
            $table->string('twitterlink')->nullable();
            $table->string('linkedinlink')->nullable();
            $table->string('youtubelink')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('professional_headline');
            $table->dropColumn('facebooklink');
            $table->dropColumn('twitterlink');
            $table->dropColumn('linkedinlink');
            $table->dropColumn('youtubelink');
        });
    }
};
