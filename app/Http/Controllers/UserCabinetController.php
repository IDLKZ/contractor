<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCabinetController extends Controller
{
    public function cabinet(){
        return view("user.attempt");
    }
}
