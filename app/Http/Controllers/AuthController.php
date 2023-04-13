<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerUser(Request $req)
    {
        $data = $req -> all();
        $req -> validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email:strict',
            'password' => ['required',
                            Password::min(8)
                            ->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
                          ],
        ]);

        $db = new Auth;
        $db -> first_name = $data['first-name'];
        $db -> last_name = $data['last-name'];
        $db -> email = $data['email'];
        $db -> password = md5($data['password']);
        $db -> save();
        
        $user = Auth::latest()->first();
        $id = $user->id;

        session()->put('id',$id+1);
        return redirect('/');
    }
    public function loginUser(Request $req)
    {
        $req -> validate([
            'email' => 'required|email:strict',
            'password' => ['required',
                            Password::min(8)
                            ->letters()
                            ->mixedCase()
                            ->numbers()
                            ->symbols()
                          ],
        ]);

        $data = $req -> all();
        $email = $data['email'];
        $password = md5($data['password']);
        
        $db = Auth::all()->toArray();
        foreach($db as $dbData){
            if($dbData['email'] == $email && $dbData['password'] == $password){
                session()->put('id',$dbData['id']);
                return redirect('/');
            }
        }
        return redirect('/login');
    }
    public function logoutUser()
    {
        session()->forget('id');
        return redirect('/login');
    }
}
