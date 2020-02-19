<?php

namespace App\Http\Controllers;

use App\Tag;

class TagController extends Controller
{
    public function index()
    {
        return view('tags.index')->with([
            'tags' => Tag::all()
        ]);
    }
}
