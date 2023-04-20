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
        $selectOptions = [
            ['label' => 'business'],
            ['label' => 'health'],
            ['label' => 'lifestyle'],
            ['label' => 'politics'],
            ['label' => 'sci-tech'],
            ['label' => 'sports'],
        ];
        return view('post')->with('selectOptions',$selectOptions);    
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

    public function viewEdit(Request $req)
    {
        $postId = $req -> postId;   
        $editPost = Post::where('id',$postId)->get()->toArray();
        // @dd($editPost);
        $selectOptions = [
            ['label' => 'business'],
            ['label' => 'health'],
            ['label' => 'lifestyle'],
            ['label' => 'politics'],
            ['label' => 'sci-tech'],
            ['label' => 'sports'],
        ];
        return view('editPost')->with('editPost',$editPost)->with('selectOptions',$selectOptions);    
    }
    public function editpost(Request $req)
    {
        $category = $req->get('category');
        $oldRecord = $req -> all();
        $postId = $req -> postId;   
        $dbRecord = Post::where('id',$postId)->get()->toarray();
        $dbUpdate = Post::find($postId);
            foreach($dbRecord as $db){
                if($db['title'] == $oldRecord['title'] && $db['content'] == $oldRecord['content'] && !$req->hasFile('postImg') && $category == null){
                    return redirect()->back();
                }
                else{
                    $dbUpdate -> title = $oldRecord['title'] ?? '';
                    $dbUpdate -> content = $oldRecord['content'] ?? '';
                    $dbUpdate -> category = $oldRecord['category'] ?? '';
                    if($req->hasFile('postImg')){
                        $imageFileName = time().'webelight'.$req -> file('postImg') -> getClientOriginalExtension();
                        $req -> file('postImg') -> storeAs('public/',$imageFileName);
                        $dbUpdate -> imagePath = $imageFileName;
                    }
                    $dbUpdate->save();
                    return redirect('/');     
                }
            }
    }
    public function deletePost(Request $req)
    {
        $userId = session()->get('userId');
        $postId = $req -> postId;
        Comment::where('user_comment_id',$userId) -> delete();
        Post::find($postId) -> delete();
        return redirect('/');
    }
}
