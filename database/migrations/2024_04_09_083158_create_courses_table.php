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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->boolean('is_paid')->default(true);
            // Add more columns as needed based on the provided documentation
            $table->timestamps();
        });

        // Assuming you have a pivot table for user-course relationships
        Schema::create('user_courses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('course_id');
            $table->timestamps();
        });

        // Assuming you have a table for course categories
        Schema::create('course_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // Add more columns as needed
            $table->timestamps();
        });

        // Assuming you have a pivot table for course-category relationships
        Schema::create('course_category_course', function (Blueprint $table) {
            $table->integer('course_id');
            $table->integer('category_id');
            $table->primary(['course_id', 'category_id']);
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
        Schema::dropIfExists('course_category_course');
        Schema::dropIfExists('course_categories');
        Schema::dropIfExists('user_courses');
        Schema::dropIfExists('courses');
    }
};
