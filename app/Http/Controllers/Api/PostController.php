<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\post as ModelsPost;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $post = Post::all();
        return json_encode($post);
    }

    public function store(Request $request) {
        $post = new Post();
        $data = [
            'title' => $request->title,
            'slug' => $request->slug,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
        ];
        $post->create($data);
        return json_encode('Alhamdulillah');
    }
}

