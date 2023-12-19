<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('forum.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->subject = $request->input('subject');
        $post->content = $request->input('content');

        $user = $request->user();
        $post->user()->associate($user);

        $post->save();

        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('forum.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);
        $post->subject = $request->input('Subject');
        $post->content = $request->input('description');
        $post->save();

        return redirect()->route('forum.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comments = Comment::where('post_id', $id)->get();
        foreach ($comments as $comment) {
            $comment->delete();
        }

        $post = Post::findOrFail($id);
        $post->delete();


        $posts = Post::all();
        return redirect()->route('forum.index')->with('posts', $posts);
    }
}
