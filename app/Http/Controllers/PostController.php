<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\DBAL\TimestampType;
use Nette\Utils\Random;
use Illuminate\Support\Facades\Schema;


class PostController extends Controller
{
    public function index(Request $req)
    {
        $id = $req -> id;
        if($id){
            $post = Post::find($id)->toarray();
            return view('post')->with('post',$post);
        }
        else{
            return view('post');
        }
    }
    public function create(Request $req)
    {
        $data = $req -> all();
        $req -> validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp',
            'category' => 'required|in:business,health,lifestyle,politics,sci-tech,sports'
        ]);
        
        $fileName = time().'webelight'.$req -> file('image') -> getClientOriginalExtension();
        $req -> file('image') -> storeAs('public/',$fileName);

        $id = session()->get('id');
        $db = new Post;
        $db -> title = $data['title'];
        $db -> content = $data['content'];
        $db -> imagePath = $fileName;
        $db -> category = $data['category'];
        $db -> user_id = $id;
        $db -> save();

        return redirect('/');
    }
    public function viewPost(Request $req)
    {
        $id = $req -> id;
        $findRecord = Post::find($id);
        if($findRecord){
            $findRecord = $findRecord->toarray();
            return view('viewPost') -> with('findRecord',$findRecord);  
        }
        else{
            return view('viewPost');  
        }
    }
    public function updatePost(Request $req)
    {
        $id = $req -> id;
        $record = Post::find($id);
        if($req -> file('image')){
            $fileName = time().'webelight'.$req -> file('image') -> getClientOriginalExtension();
            $req -> file('image') -> storeAs('public/',$fileName);
            $record -> imagePath = $fileName;
        }
    
        $record -> title = $req['title'];
        $record -> content = $req['content'];
        $record -> comment = $req['comment'];
        $record -> save();

        return redirect('/');
    }
    public function deletePost(Request $req)
    {
        $id = $req -> id;
        $record = Post::find($id) -> delete();
        return redirect('/');
    }
}
