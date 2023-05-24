<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentsRequest;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;

class CommentsController extends Controller
{
    public function store(Post $post, CommentsRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $comment = new Comment();

        $comment->post_id = $post->id;
        $comment->author  = $data['author'];
        $comment->text    = $data['text'];
        $comment->save();

        return back();
    }

    public function destroy(Comment $comment): RedirectResponse
    {
        $comment->delete();
        return back();
    }
}
