<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderByDesc('created_at')->cursorPaginate(5);
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'title' => 'required',
            'content' => 'required',
            'category_id' => ['required', 'exists:categories,id'],
            'published_at' => ['nullable', 'datetime'],
        ]);

        if (isset($validated["image"])) {
            $image = $validated["image"];
            $validated['image'] = $image->store('posts', 'public');
        }
        $validated['slug'] = Str::slug($validated['title'], "-");
        $validated['user_id'] = Auth::id();

        Post::create($validated);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $username, Post $post)
    {
        return 'title: ' .$post->title;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
