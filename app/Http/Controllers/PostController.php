<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('comments')->with('comments.user')->with('user')->get();
        return response()->json($posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info(["user_store" => $request->user]);
        $request->validate([
            'text' => ['required'],
            'image' => ['image'],
        ]);
        $data = [];
        $data['text'] = $request->input('text');
        $data['user_id'] = $request->user->id;

        if ($request->file('image')) {
          $path = Storage::disk('public')->put('post-images', $request->file('image'));
          $data['image'] = $path;
        }

        $post = Post::create($data);
        return response()->json(['message' => "Post '{$post->text}' creado satisfactoriamente!"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->comments;
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'text' => ['required'],
            'image' => ['image'],
        ]);

        if ($post->user_id != $request->user->id) {
          throw ValidationException::withMessages([
              'message' => "El post solo puede ser editado por el usuario '" . $post->user->name ."'"
          ]);
        }

        $data = [];
        $data['text'] = $request->input('text');

        if ($request->file('image')) {
          $path = Storage::disk('public')->put('post-images', $request->file('image'));
          $data['image'] = $path;
        }

        $post->update($data);

        return response()->json(['message' => "Post '{$post->text}' actulizado satisfactoriamente!"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(['message' => "Post '{$post->text}' eliminado satisfactoriamente!"]);
    }
}
