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
        Schema::table('courses', function (Blueprint $table) {
            $table->text('short_description')->nullable();
            $table->text('course_description')->nullable();
            $table->text('skills')->nullable();
            $table->text('requirements')->nullable();
            $table->string('course_level')->nullable();
            $table->string('audio_language')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('video_url')->nullable();
            $table->string('course_type')->nullable();
            $table->decimal('regular_price', 10, 2)->nullable();
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->string('course_thumbnail')->nullable(); // Assuming this is where you store the image path
        });
    }

    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumn([
                'title',
                'short_description',
                'course_description',
                'skills',
                'requirements',
                'course_level',
                'audio_language',
                'category_id',
                'video_url',
                'course_type',
                'regular_price',
                'discount_price',
                'course_thumbnail',
            ]);
        });
    }
};
