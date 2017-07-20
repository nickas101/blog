<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Redirect;
use Request;
use Validator;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'posts' => Post::all(),
            'user' => Auth::user(),
        ];

        return view('home', $params);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        if ($post) {
            return view('edit')->with('post', $post);
        } else {
            return redirect()->back();
        }
    }

    public function update($id)
    {
        $request_data = Request::all();
        $post = Post::find($id);

        if ($post) {
            if (isset($request_data['title'])) {
                $post->title = $request_data['title'];
            }
            if (isset($request_data['text'])) {
                $post->text = $request_data['text'];
            }
            $post->save();
        }

        return Redirect::to('/home');
    }

    public function create()
    {
        return view('create');
    }

    public function add()
    {
        $request_data = Request::all();

        if (isset($request_data['title']) && isset($request_data['text'])) {
            $post = [
                'title' => $request_data['title'],
                'text' => $request_data['text'],
            ];

            Post::create($post);
        }

        return Redirect::to('/home');
    }

    public function delete($id)
    {
        $post = Post::find($id);

        if ($post) {
            $post->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}
