<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CategoryPagesController extends Controller
{
    public function category(Request $req)
    {
        $path = $req->path();
        $userId = session()->get('userId');
        $business = Post::where(['category' => 'business', 'user_id' => $userId])->get()->toarray();
        $health = Post::where(['category' => 'health', 'user_id' => $userId])->get()->toarray();
        $lifestyle = Post::where(['category' => 'lifestyle', 'user_id' => $userId])->get()->toarray();
        $politics = Post::where(['category' => 'politics', 'user_id' => $userId])->get()->toarray();
        $sciTech = Post::where(['category' => 'sci-tech', 'user_id' => $userId])->get()->toarray();
        $sports = Post::where(['category' => 'sports', 'user_id' => $userId])->get()->toarray();

        return view($path, [
            'post' => $$path
        ]);
    }
    public function catView(Request $req)
    {
        $postId = $req->postId;
        $post = Post::findOrFail($postId);
        return view('categoryView', [
            'post' => $post
        ]);
    }
}
