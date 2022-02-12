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
        $receiveds = Attempt::with('application')->where(['step_id' => 1, 'status' => 0])->paginate(10);
        return view('admin.orders.received', compact('receiveds'));
    }

    public function accepted()
    {
        $accepts = Attempt::with('application')->where(['step_id' => 2, 'status' => 0])->paginate(10);
        return view('admin.orders.accepted', compact('accepts'));
    }

    public function special_check()
    {
        $specials = Attempt::with('application')->where(['step_id' => 3, 'status' => 0])->paginate(10);
        return view('admin.orders.special_check', compact('specials'));
    }

    public function received_show($id)
    {
        $app = Application::find($id);
        return view('admin.orders.received-show', compact('app'));
    }

    public function received_update(Request $request)
    {
        $this->validate($request, ['id' => 'required']);
        if ($request['accepted_comment']){
            $item = Attempt::where('application_id', $request->get('id'))->first();
            Attempt::receivedUpdate($item, $request['accepted_comment']);
            toastError('Документ отклонен!');
        } else {
            $item = Attempt::where('application_id', $request->get('id'))->first();
            Attempt::receivedUpdate($item);
            toastInfo('Документ успешно отправлен на следующий этап!');
        }

        return redirect(route('received'));
    }

    public function accepted_update(Request $request)
    {
        $this->validate($request, ['id' => 'required']);
        $item = Attempt::where('application_id', $request->get('id'))->first();
        Attempt::acceptedUpdate($item);
        toastInfo('Документ успешно отправлен на следующий этап!');
        return redirect(route('accepted'));
    }

    public function accepted_show($id)
    {
        $app = Application::find($id);
        return view('admin.orders.accepted_check', compact('app'));
    }

    public function rejected()
    {
        $rejecteds = Attempt::with('application')->where('status', -1)->paginate(10);
        return view('admin.orders.rejected', compact('rejecteds'));
    }
}
