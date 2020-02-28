<?php

namespace App\Http\Controllers;


use App\Post;
=======
use App\Category;
use App\Image;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index')->with([
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show')->with([
            'post' => $post,
            'images' => $post->images,
            'videos' => $post->videos,
        ]);
    }

    public function newPost()
    {
        $cats = Category::all();
        $tags = Tag::all();
        return view('posts.new_post')->with([
            'categories' => $cats,
            'tags' => $tags
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);
        $data['author_id'] = auth()->id();
        $data['post_type'] = 'text';

        $post = Post::create($data);

        if ($request->has('tags')) {
            foreach ($request->tags as $item) {
                \DB::table('post_tag')->insert([
                    'post_id' => $post->id,
                    'tag_id' => $item
                ]);
            }
        }

        if ($request->hasFile('images')) {
            $counter = 0;
            foreach ($request->file('images') as $item) {
                $path = $item->store('public');
                $image = new Image();
                $image->post_id = $post->id;
                $image->description = '';
                $image->url = $path;
                if ($counter == 0) {
                    $image->featured = true;
                } else {
                    $image->featured = false;
                }
                $image->save();
                $counter++;
            }
        }

        return redirect(route('posts'))->with('flash', 'Post Created!');
    }
}
