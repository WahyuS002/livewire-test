<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('pages.post.index', compact('posts'));
    }

    public function create()
    {
        return view('pages.post.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|min:6',
            'deskripsi' => 'required|min:6'
        ]);

        if ($validator->fails()) {
            // dd($validator->messages()->all()[0])->withInput();
            return redirect()->back()->with('error', $validator->messages()->all()[0])->withInput();
        }

        Post::create($request->all());
        return redirect()->route('post')->with('success', 'Task Created Successfully!');
    }
}
