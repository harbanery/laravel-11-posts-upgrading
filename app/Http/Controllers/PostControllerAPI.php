<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Post::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'image' => 'required|string',
            'slug' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Post::create($request->all());

        return response()->json(['message' => 'Post created successfully.'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        $post = Post::find($post);
        if (!$post) {
            return response()->json(['message' => 'Post not found.'], 404);
        }
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $post = Post::find($post);
        if (!$post) {
            return response()->json(['message' => 'Post not found.'], 404);
        }
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string',
            'image' => 'required|string',
            'slug' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $post->update($request->all());

        return response()->json(['message' => 'Post updated successfully.'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post = Post::find($post);
        if (!$post) {
            return response()->json(['message' => 'Post not found.'], 404);
        }

        $post->delete();

        return response()->json(['message' => 'Post deleted successfully.'], 200);
    }
}
