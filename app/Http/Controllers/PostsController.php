<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index');
    }

    public function show() {
        return view('posts.show');
    }

    public function create() {
        return view('posts.create');
    }

    public function store(){
        //create new post using the request data
        $post = new Post;

        $post->title = \request('title');
        $post->body = \request('body');

        // save it to the database
        $post->save();

        // redirect to the home page
        return redirect('/');

    }
}



