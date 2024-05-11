<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            $categoryId = rand(1, 5);

            DB::table('courses')->insert([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'price' => $faker->randomFloat(2, 10, 100),
                'is_paid' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
                'short_description' => $faker->sentence,
                'course_description' => $faker->paragraph,
                'skills' => $faker->words(3, true),
                'requirements' => $faker->sentence,
                'course_level' => $faker->randomElement(['Beginner', 'Intermediate', 'Advanced']),
                'audio_language' => $faker->languageCode,
                'category_id' => $categoryId,
                'video_url' => $faker->url,
                'regular_price' => $faker->randomFloat(2, 20, 200),
                'discount_price' => $faker->randomFloat(2, 10, 100),
                'course_thumbnail' => $faker->imageUrl(200, 200)
            ]);
        }
    }
}
