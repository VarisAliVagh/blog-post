<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $userId = session()->get('userId');
        $business = Post::where(['category' => 'business', 'user_id' => $userId])->limit(4)->get();
        $health = Post::where(['category' => 'health', 'user_id' => $userId])->limit(4)->get();
        $lifestyle = Post::where(['category' => 'lifestyle', 'user_id' => $userId])->limit(4)->get();
        $politics = Post::where(['category' => 'politics', 'user_id' => $userId])->limit(4)->get();
        $sciTech = Post::where(['category' => 'sci-tech', 'user_id' => $userId])->limit(4)->get();
        $sports = Post::where(['category' => 'sports', 'user_id' => $userId])->limit(4)->get();
        $latestPost = Post::where('user_id', $userId)->latest()->take(10)->get();
        return view('welcome')->with('posts', ['latestPost' => $latestPost, 'business' => $business, 'health' => $health, 'lifestyle' => $lifestyle, 'politics' => $politics, 'sci-tech' => $sciTech, 'sports' => $sports]);
    }
}
