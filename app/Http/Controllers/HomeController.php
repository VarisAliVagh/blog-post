<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(Request $req)
    {
        $val = $req['search'] ?? '';
        $id = session()->get('id');
        $posts = Post::all()->where('user_id',$id)->toArray();
        return view('welcome')->with('posts',$posts);
    }
}
