<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('dashboard.posts',[
            'title'=>'Pengunguman',
            'posts'=>Post::all(),
            'events'=>Event::all()
        ]);
    }


    public function show(Post $post)
    {
        return view('dashboard.post',[
            'title'=>"Pengunguman",
            'post'=>$post,
            'events'=>Event::all()
        ]);
    }
}
