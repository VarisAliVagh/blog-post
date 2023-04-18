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
        $business = Post::where(['category'=>'business','user_id'=>$id])->limit(4)->get();
        $health = Post::where(['category'=>'health','user_id'=>$id])->limit(4)->get();
        $lifestyle = Post::where(['category'=>'lifestyle','user_id'=>$id])->limit(4)->get();
        $politics = Post::where(['category'=>'politics','user_id'=>$id])->limit(4)->get();
        $sciTech = Post::where(['category'=>'sciTech','user_id'=>$id])->limit(4)->get();
        $sports = Post::where(['category'=>'sports','user_id'=>$id])->limit(4)->get();
        $latestPost = Post::where('user_id',$id)->latest()->take(10)->get();
        // @dd($latestPost->toarray());
        return view('welcome')->with('posts',['latestPost'=>$latestPost,'business'=>$business,'health'=>$health,'lifestyle'=>$lifestyle,'politics'=>$politics,'sciTech'=>$sciTech,'sports'=>$sports]);
    }
}
