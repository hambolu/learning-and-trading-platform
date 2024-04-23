<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PostController extends Controller
{
    use ImageUploadTrait;
    public function index()
    {
        // Fetch all posts from the database
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $title = $request->input('title');
        $slug = Str::slug($title);
        
        // Create a new post
        $post = new Post();
        $post->title = $request->input('title');
        $post->slug = $slug;
        $post->content = $request->input('content');
        // Handle image upload
        $imagePath = $this->uploadImage($request, 'image', 'post_images');

        if ($imagePath) {
            $post->image = $imagePath;
        }
        $post->save();

        toastr()->success('Post created successfully');
        return back();
    }

    public function show($id)
    {
        // Find a specific post by its ID
        $post = Post::find($id);

        if (!$post) {
            abort(404); // Post not found
        }

        return view('posts.show', ['post' => $post]);
    }

    public function edit($id)
    {
        // Find the post to edit
        $post = Post::find($id);

        if (!$post) {
            abort(404); // Post not found
        }

        return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the existing post
        $post = Post::find($id);
        if (!$post) {
            abort(404); // Post not found
        }

        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    public function destroy($id)
    {
        // Find the post to delete
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
        }

        abort(404); // Post not found
    }
}
