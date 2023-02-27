<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function viewSinglePost(Post $post){
        
        $post['body'] = Str::markdown($post->body);
        return view('blog-detail', ['post' =>$post]);
    }


    public function createPost() {
        if(auth()->check()){
            return view('create-post');
        } else {
            return view('homepage');
        }
    }

    public function storeNewPost(Request $request) {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required'
        ]);
        
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['category'] = strip_tags($incomingFields['category']);
        $incomingFields['user_id'] = auth()->id();

        Post::create($incomingFields);
        
        $post = new Post();

        return view('blog-detail', ['post' => $post]);
    }
}
