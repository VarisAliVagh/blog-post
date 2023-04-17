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

        session()->put('id',$id);
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
        $error = "<div class='login-alert alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Failed!</strong> Please recheck the email and password
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                 </div>";
        return view('/login') -> with('error',$error);
    }
    public function logoutUser()
    {
        session()->forget('id');
        session()->flush();
        return redirect('/login');
    }
}
