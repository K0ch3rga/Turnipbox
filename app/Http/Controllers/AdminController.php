<?php

namespace App\Http\Controllers;

use Str;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;


class AdminController extends Controller
{
    function about() {
        return view('About');
    }

    function admin() {
        $products = new Product;
        return view('Admin', ['products'=>$products->all()]);
    } 

    function update(Request $request){
        $reference = Product::find($request->product);

        $reference->update([
            'ean' => $request->input('ean'),
            'name' => $request->input('name'),
            'manufacturer' => $request->input('manufacturer'),
            'massvalue' => $request->input('massvalue'),
            'masstype' => $request->input('masstype'),
            'type' => $request->input('type'),
            'tags' => $request->input('tags'),
            'edit' => $request->input('edit')
        ]);
        return redirect(route('product', [$request->product]));
    }
    
    function register(Request $request) {
        if (Auth::check()) {
            return redirect(route('admin'));
        }

        $validate = $request->validate([
            'name' => 'required|max:255',
            'login' => 'required|email',
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('login');
        $user->password = Str::password(32, true, true, false);
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
