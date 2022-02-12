<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yoeunes\Toastr\Facades\Toastr;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");

    }


    public function register(){
        return view("auth.register");
    }

    public function signUp(RegisterRequest $request){
        $input = $request->all();
        $input["role_id"] = 2;
        $input["password"] = bcrypt($request["password"]);
        if(User::add($input)){
            toastSuccess("Успешно зарегистрировались!");
            return  redirect(route("login"));
        }
        else{
            toastWarning("Упс что-то пошло не так");
            return redirect()->back();
        }

    }


    public function signIn(Request $request){
        $request->validate(["email"=>"required|email", "password"=>"required|min:4|max:255"]);
        $user = Auth::attempt(["email"=>$request["email"],"password"=>$request["password"]]);

        if($user){
            if (Auth::user()->role_id == 1) {
                $request->session()->regenerate();
                return redirect(route('received'));
            } else {
                $request->session()->regenerate();
                return redirect("/");
            }
        }
        else{
            toastError("Пароль или email некорректны");
            return redirect()->back();
        }
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect()->route("login");
    }
}
