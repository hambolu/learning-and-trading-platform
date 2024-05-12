@if (Auth::user()->roles->contains('name', 'super_admin'))
<li>
    <a href="/create-course" class="upload_btn" title="Create New Course">Create New Course</a>
</li>
<li>
    <a href="#" class="upload_btn" title="Create New Course" data-bs-toggle="modal"
        data-bs-target="#create_category">Create Course Category</a>
</li>
@endif