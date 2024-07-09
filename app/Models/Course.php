<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'slug',
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
        'price',
    ];
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

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }
}
