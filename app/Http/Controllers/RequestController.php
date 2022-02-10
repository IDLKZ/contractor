<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveApplicationRequest;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function create(){
        return view("user.requests.request_create");
    }

    public function myRequest(){
        return view("user.requests.my_requests");

    }

    public function offers(){
        return view("user.offers");
    }


    public function save(SaveApplicationRequest $request){
        dd($request->all());
    }
}
