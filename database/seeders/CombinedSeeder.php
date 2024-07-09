<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Post;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CombinedSeeder extends Seeder
{
    public function run()
    {


            $faker = Faker::create();

            // Create 20 categories
            for ($i = 0; $i < 20; $i++) {
                $category = new CourseCategory();
                $category->name = $faker->word;
                $category->image = $faker->imageUrl(640, 480, 'cats', true);
                $category->save();
            }

            // Create 20 courses
            for ($i = 0; $i < 20; $i++) {
                $course = new Course();
                $course->title = $faker->sentence;
                $course->slug = Str::slug($course->title);
                $course->short_description = $faker->paragraph;
                $course->course_description = $faker->paragraphs(3, true);
                $course->skills = $faker->words(5, true);
                $course->requirements = $faker->words(5, true);
                $course->course_level = $faker->randomElement(['beginner', 'intermediate', 'advanced']);
                $course->audio_language = $faker->languageCode;
                $course->category_id = CourseCategory::inRandomOrder()->first()->id;
                $course->video_url = $faker->url;
                $course->course_type = $faker->randomElement(['online', 'offline']);
                $course->regular_price = $faker->numberBetween(100, 1000);
                $course->discount_price = $faker->numberBetween(50, 900);
                $course->course_thumbnail = $faker->imageUrl(640, 480, 'technics', true);
                $course->price = $course->regular_price;
                $course->save();
            }

            // Create 20 products
            for ($i = 0; $i < 20; $i++) {
                $product = new Product();
                $product->name = $faker->word;
                $product->slug = Str::slug($product->name);
                $product->description = $faker->paragraph;
                $product->price = $faker->numberBetween(10, 500);
                $product->type = $faker->randomElement(['eBook', 'video', 'course']);
                $product->is_approved = $faker->boolean;
                $product->image = $faker->imageUrl(640, 480, 'business', true);
                $product->seller_id = $faker->numberBetween(1, 10); // Adjust according to your seller table
                $product->save();
            }

            // Create 20 posts
            for ($i = 0; $i < 20; $i++) {
                $slug = Str::slug($faker->sentence);
                $post = new Post();
                $post->title = $faker->sentence;
                $post->slug = $slug;
                $post->content = $faker->paragraphs(3, true);
                $post->image = $faker->imageUrl(640, 480, 'nature', true);
                $post->save();
            }
        }
}
