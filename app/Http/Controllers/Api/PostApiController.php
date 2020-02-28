<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Post;

class PostApiController extends Controller
{
    public function index()
    {
        $posts = Post::with(['author', 'images', 'videos', 'category', 'tags'])->paginate();
        return PostResource::collection($posts);
    }
}
