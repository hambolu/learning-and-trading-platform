<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;

class CourseController extends Controller
{
    //
    use ImageUploadTrait;
    public function createCategory(Request $request)
    {
        try {
            $category = new CourseCategory();
            $category->name = $request->name;

            // Handle image upload
            $imagePath = $this->uploadImage($request, 'image', 'category_images');

            if ($imagePath) {
                $category->image = $imagePath;
            }
            //dd($category);
            $category->save();

            toastr()->success('Category saved successfully!');
            return back();
        } catch (\Exception $e) {
            toastr()->error('Failed to save category.');
            return back();
        }
    }

    public function createCourse(Request $request)
    {

        try {
            $course = new Course();
            $course->title = $request->title;
            $course->short_description = $request->short_description;
            $course->course_description = $request->course_description;
            $course->skills = $request->skills;
            $course->requirements = $request->requirements;
            $course->course_level = $request->course_level;
            $course->audio_language = $request->audio_language;
            $course->category_id = $request->category_id;
            $course->video_url = $request->video_url;
            $imagePath = $this->uploadImage($request, 'thumbnail', 'course_thumbnail');

            $course->course_type = $request->course_type;
            $course->regular_price = $request->regular_price ?? 0;
            $course->discount_price = $request->dicount_price ?? 0;
            $course->course_thumbnail = $request->imagePath;
            $course->price = $request->regular_price ?? 0;
            //dd($course);
            $course->save();


            toastr()->success('Course created successfully!');
            return back();
        } catch (\Exception $e) {
            dd($e->getMessage());
            toastr()->error('Course creation Failed.');
            return back();
        }
    }
}
