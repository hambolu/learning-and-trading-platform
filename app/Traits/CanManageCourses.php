<?php

namespace App\Traits;

use App\Models\Course;

trait CanManageCourses
{
    /**
     * Add a course to the user's managed courses.
     *
     * @param Course $course
     * @return void
     */
    public function addCourse(Course $course)
    {
        // Add logic here to associate the course with the user
        // For example, you can store the course ID in a pivot table
        $this->courses()->attach($course);
    }

    /**
     * Remove a course from the user's managed courses.
     *
     * @param Course $course
     * @return void
     */
    public function removeCourse(Course $course)
    {
        // Add logic here to disassociate the course from the user
        // For example, you can remove the course ID from the pivot table
        $this->courses()->detach($course);
    }

    /**
     * Get the user's managed courses.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function managedCourses()
    {
        return $this->belongsToMany(Course::class, 'user_managed_courses')->withTimestamps();
    }

    // Other course management methods as needed
}
