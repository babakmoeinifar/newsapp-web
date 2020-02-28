<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;

class CategoryApiController extends Controller
{
    public function index()
    {
        $cats = Category::all();
        return CategoryResource::collection($cats);
    }

    public function posts($id)
    {
        $cat = Category::findOrFail($id);
        $posts = $cat->posts;
        return PostResource::collection($posts);
    }
}
