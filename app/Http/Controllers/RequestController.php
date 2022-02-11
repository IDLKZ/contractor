<?php

namespace App\Http\Controllers;

use App\Application;
use App\Attempt;
use App\Http\Requests\SaveApplicationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function create(){
        return view("user.requests.request_create");
    }

    public function myRequest(){
        $applications = Application::where("user_id",Auth::id())->pluck("id")->toArray();
        $attempts = Attempt::whereIn("application_id",$applications)->paginate(20);
        return view("user.requests.my_requests",compact("attempts"));

    }

    public function offers(){
        return view("user.offers");
    }


    public function save(SaveApplicationRequest $request){
        $input = $request->all();
        $input["user_id"] = Auth::id();
        $application = Application::uploadWithFiles($request,$input);
        if($application){
            if($request->get("type") == 1){
                Attempt::newAttempt($application);
            }
            return redirect()->back();
        }
        else{
            return redirect()->back();

        }

    }
}
