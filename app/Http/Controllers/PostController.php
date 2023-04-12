<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\DBAL\TimestampType;
use Nette\Utils\Random;

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

        $fileName = time().'webelight'.$req -> file('image') -> getClientOriginalExtension();
        $req -> file('image') -> storeAs('public/',$fileName);

        $db = new Post;
        $db -> title = $data['title'];
        $db -> content = $data['content'];
        $db -> comment = $data['comment'];
        $db -> imagePath = $fileName;
        $db -> save();

        return redirect('/');
    }
}
