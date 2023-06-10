<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    function index() {
        return view('About');
    }

    function admin() {
        $products = new Product;
        return view('Admin', ['products'=>$products->all()]);
    } 

    function register(Request $request) {
        if (Auth::check()) {
            return redirect(route('admin'));
        }

        $validate = $request->validate([
            'name' => 'required|max:255',
            'login' => 'required|email',
        ]);

        function generate($len) {
            $chars = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
            $string = '';
            for ($i = 0; $i < $len; $i++) {
                $index = rand(0, strlen($chars) - 1);
                $string .= $chars[$index];
            }
            echo $string;
            return $string;
        };

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('login');
        // $user->password = generate(10);
        $user->password = $request->input('password');
        $user->save();

        if($user){
            auth()->login($user);
        }
        
        return redirect(route('login'))->withErrors([
            'formError' => 'Произошла ошибка'
        ]);
    }

    function login(Request $request) {
        if (Auth::check()) {
            return redirect(route('admin'));
        }

        $user = $request->only(['email', 'password']);
        
        if(Auth::attempt($user)){
            return redirect()->intended('admin');
        }

        return redirect(route('login'))->withErrors([
            'email' => 'Не удалось авторизоваться'
        ]);
    }

    function logout(){
        Session:flush();
        Auth::logout();
        return redirect('login');
    }
}
