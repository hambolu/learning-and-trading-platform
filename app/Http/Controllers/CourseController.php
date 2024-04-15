<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
            $imagePath = $this->uploadImage($request, 'image','category_images');

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
}
