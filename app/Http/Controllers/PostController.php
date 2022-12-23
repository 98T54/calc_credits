<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Lecture;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post, Lecture $lecture){
        
        
        return view('posts/index')->with(['lectures' => $lecture->get(), 'posts' => $post->getPagenateByLimit()]);
    }
    
    public function store(PostRequest $request, Post $post){
        
        
        $input = $request['post'];
        
        $post->fill($input)->save();
       
        return redirect('/');
        
    }
}
