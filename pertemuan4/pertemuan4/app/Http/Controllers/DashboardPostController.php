<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::where('user_id', Auth::user()->id);

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        return view('dashboard.index', [
            'posts' => $posts->paginate(5)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('dashboard.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->title);

        $origialSlug = $slug;
        $count = 1;
        while (Post::where('slug', $slug)->exists()) {
            $slug = $origialSlug . '-' . $count;
            $count++;
    }
    
        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Post created successfully.');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
