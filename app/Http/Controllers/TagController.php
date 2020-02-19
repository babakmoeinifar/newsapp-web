<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('tags.index')->with([
            'tags' => Tag::all()
        ]);
    }

    public function show($id)
    {
        return view('tags.show')->with([
            'tag' => Tag::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
        ]);

        Tag::create($data);
        return redirect()->back()->with('flash', 'Tag Created!');
    }
}
