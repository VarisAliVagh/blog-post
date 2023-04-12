<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post');
    }
    public function create(Request $req)
    {
        $data = $req -> all();
        $req -> validate([
            'title' => 'required',
            'content' => 'required',
            'comment' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp'
        ]);

        
        $db = new Post;
        $db -> title = $data['title'];
        $db -> content = $data['content'];
        $db -> comment = $data['comment'];
        $db -> imagePath = $data['image']-> getClientOriginalName();
        $db -> save();

        return redirect('/');
    }
}
