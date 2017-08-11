<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {

        $this.validate(request(), ['body' => 'required']);
        
        Comment::create([
            'post_id' => $post->id,
            'body' => request('body')
        ]);

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);

        return back();
    }
}
