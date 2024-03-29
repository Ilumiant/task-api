<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::with('user')->with('post')->with('post.user')->get();
        return response()->json($comments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'text' => ['required'],
            'post_id' => ['required', 'numeric'],
        ]);

        $data = [];
        $data['text'] = $request->input('text');
        $data['user_id'] = $request->user->id;
        $data['post_id'] = $request->input('post_id');

        $comment = Comment::create($data);
        return response()->json(['message' => "Comentario '{$comment->text}' creado satisfactoriamente!"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        return response()->json($comment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'text' => ['required'],
        ]);

        if ($comment->user_id != $request->user->id) {
          throw ValidationException::withMessages([
              'message' => "El comentario solo puede ser editado por el usuario '" . $comment->user->name ."'"
          ]);
        }

        $comment->update([
            'text' => $request->input('text')
        ]);

        return response()->json(['message' => "Comentario '{$comment->text}' actulizado satisfactoriamente!"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return response()->json(['message' => "Comentario '{$comment->text}' eliminado satisfactoriamente!"]);
    }
}
