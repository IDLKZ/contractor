<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use App\Attempt;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function received()
    {
        $receiveds = Attempt::with('application')->where('step_id', 1)->paginate(10);
        return view('admin.orders.received', compact('receiveds'));
    }

    public function accepted()
    {
        $accepts = Attempt::with('application')->where('step_id', 2)->paginate(10);
        return view('admin.orders.accepted', compact('accepts'));
    }

    public function special_check()
    {
        return view('admin.orders.special_check');
    }

    public function received_show($id)
    {
        $app = Application::find($id);
//        dd($app->car_licence);
        return view('admin.orders.received-show', compact('app'));
    }

    public function accepted_show($id)
    {
        $app = Application::find($id);
        return view('admin.orders.accepted_check', compact('app'));
    }
}
