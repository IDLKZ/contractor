<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function received()
    {
        return view('admin.orders.received');
    }

    public function accepted()
    {
        return view('admin.orders.accepted');
    }

    public function special_check()
    {
        return view('admin.orders.special_check');
    }

    public function received_show($id)
    {
        return view('admin.orders.received-show');
    }

    public function accepted_show($id)
    {
        return view('admin.orders.accepted_check');
    }
}
