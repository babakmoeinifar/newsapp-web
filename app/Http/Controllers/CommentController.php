<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('comments.index')->with([
            'comments' => Comment::with(['author', 'post'])->paginate()
        ]);
    }

    public function show($id)
    {
        return view('comments.show')->with([
            'comment' => Comment::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {

    }
}
