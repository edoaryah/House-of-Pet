<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Contracts\View\View;
use App\Http\Requests\PostsRequest;

class PostsController extends Controller
{
    public function index()
    {
        return view('post.index', [
            'post' => Post::latest()->get(),
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'post'     => $post,
            'comments' => $post->comments()->paginate(5)
        ]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(PostsRequest $request)
    {
        $data = $request->validated();

        $post = new Post();
        $post->title = $data['title'];
        $post->text  = $data['text'];
        $post->save();

        return redirect('/posts/'.$post->id);
    }
}