<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\Auth;

class AuthController extends Controller
{
    public function getRegister()
    {
        return view('register');
    }
    public function postRegister(Request $req)
    {
        $registerData = $req->all();
        $req->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email:strict',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
        ]);

        $registerTable = new Auth;
        $registerTable->first_name = $registerData['first-name'];
        $registerTable->last_name = $registerData['last-name'];
        $registerTable->email = $registerData['email'];
        $registerTable->password = md5($registerData['password']);
        $registerTable->save();

        $latestRegisterUser = Auth::latest()->first();
        $userId = $latestRegisterUser->id;
        session()->put('userId', $userId);
        return redirect('/');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $req)
    {
        $req->validate([
            'email' => 'required|email:strict',
            'password' => [
                'required',
                Password::min(8)
                    ->letters()
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
            ],
        ]);

        $loginData = $req->all();
        $email = $loginData['email'];
        $password = md5($loginData['password']);

        $registerTable = Auth::all()->toArray();
        foreach ($registerTable as $registerUser) {
            if ($registerUser['email'] == $email && $registerUser['password'] == $password) {
                session()->put('userId', $registerUser['id']);
                return redirect('/');
            }
        }
        $loginError = "<div class='login-alert alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Failed!</strong> Please recheck the email and password
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
        return view('/login')->with('loginError', $loginError);
    }
    public function logout()
    {
        session()->forget('userId');
        session()->flush();
        return redirect()->route('getLogin');
    }
}
