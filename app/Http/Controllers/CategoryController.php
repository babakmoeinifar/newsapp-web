<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.index')->with([
            'categories' => Category::all()
        ]);
    }

    public function show($id)
    {
        return view('categories.show')->with([
            'categories' => Category::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'color' => 'required',
        ]);

        Category::create($data);
        return redirect()->back()->with('flash', 'Category Created!');
    }
}
