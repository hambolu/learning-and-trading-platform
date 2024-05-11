<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'description', 'price', 'is_paid'];

    /**
     * Get the users enrolled in this course.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_courses');
    }

    /**
     * Get the categories associated with this course.
     */
    public function categories()
    {
        return $this->belongsToMany(CourseCategory::class, 'course_category_course', 'course_id', 'category_id');
    }
    
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
