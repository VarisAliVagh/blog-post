<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Database\DBAL\TimestampType;
use Nette\Utils\Random;
use Illuminate\Support\Facades\Schema;


class PostController extends Controller
{
    public function index()
    {
        return view('post');        
    }
    public function createPost(Request $req)
    {
        $postData = $req -> all();
        $req -> validate([
            'title' => 'required',
            'content' => 'required',
            'postImg' => 'required|image|mimes:jpeg,png,jpg,webp',
            'category' => 'required|in:business,health,lifestyle,politics,sci-tech,sports'
        ]);

        $imageFileName = time().'webelight'.$req -> file('postImg') -> getClientOriginalExtension();
        $req -> file('postImg') -> storeAs('public/',$imageFileName);

        $userId = session()->get('userId');
        $posts = new Post;

        $posts -> title = $postData['title'];
        $posts -> content = $postData['content'];
        $posts -> imagePath = $imageFileName;
        $posts -> category = $postData['category'];
        $posts -> user_id = $userId;
        $posts -> save();

        return redirect()->route('index');
    }
    public function viewPost(Request $req)
    {
        $postId = $req -> postId;
        $post = Post::find($postId)->toarray();
        $userId = session()->get('userId');
        $commentRecord = Comment::where('user_comment_id',$userId)->where('post_id',$postId)->get();
        return view('viewPost')->with('postsArray',['posts'=>$post,'commentRecord'=>$commentRecord]);
    }
    public function createComment(Request $req)
    {
        $postId = $req -> postId;
        $comment = new Comment;
        $req -> validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);
        
        $userId = session()->get('userId');
        $imageFileName = '';    
        if($req['profile']){
            $imageFileName = time().'webelight'.$req -> file('profile') -> getClientOriginalExtension();
            $req -> file('profile') -> storeAs('public/',$imageFileName);
        }

        $comment -> comment = $req['comment'] ?? '';
        $comment -> name = $req['name'];
        $comment -> email = $req['email'];
        $comment -> website = $req['website'] ?? '';
        $comment -> user_comment_id = $userId;
        $comment -> post_id = $postId;
        $comment -> profilePath = $imageFileName;
        $comment -> save();

        return redirect()->route('viewPost',['postId'=>$postId]);
    }

    // public function editPost(Request $req)
    // {
    //     $postId = $req -> postId;
    //     $record = Post::find($pos);
    //     if($req -> file('image')){
    //         $fileName = time().'webelight'.$req -> file('image') -> getClientOriginalExtension();
    //         $req -> file('image') -> storeAs('public/',$fileName);
    //         $record -> imagePath = $fileName;
    //     }
    
    //     $record -> title = $req['title'];
    //     $record -> content = $req['content'];
    //     $record -> comment = $req['comment'];
    //     $record -> save();

    //     return redirect('/');
    // }
    // public function deletePost(Request $req)
    // {
    //     $id = $req -> id;
    //     $record = Post::find($id) -> delete();
    //     return redirect('/');
    // }
    
}
