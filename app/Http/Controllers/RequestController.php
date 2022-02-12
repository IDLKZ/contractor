<?php

namespace App\Http\Controllers;

use App\Application;
use App\Attempt;
use App\Http\Requests\ChangeApplicationRequest;
use App\Http\Requests\SaveApplicationRequest;
use App\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function create(){
        return view("user.requests.request_create");
    }

    public function update($id){
        $application = Application::where(["id"=>$id,"user_id"=>Auth::id()])->withCount('attempts')->first();
        if($application && $application->attempts_count == 0){
            return view("user.requests.request_update",compact("application"));
        }
        else{
            toastWarning("К сожалению заявка не найдена");
            return  redirect()->back();
        }

    }

    public function myRequest(){
        $applications = Application::where("user_id",Auth::id())->with("attempts","offers")->paginate(15);
        return view("user.requests.my_requests",compact("applications"));
    }


    public function showRequest($id){
        $attempt = Attempt::find($id);
        if($attempt){
            $application = Application::where(["id"=>$attempt->application_id,"user_id"=>Auth::id()])->get();
            if($application){
               return  view("user.attempt",compact("attempt"));
            }
            else{
                return redirect()->route("myRequest");
            }
        }
        else{
            return redirect()->route("myRequest");
        }
    }

    public function offer($id){
        $offer = Offer::find($id);
        if($offer){
            $attempt = Attempt::find($offer->attempt_id);
            return view("user.offers",compact("offer","attempt"));

        }
        else{
            return  redirect()->back();
        }
    }


    public function save(SaveApplicationRequest $request){
        $input = $request->all();
        $input["anketa"] = ($input["anketa"][0] == null && $input["anketa"] == "[]" ) ? [] : $input["anketa"];
        $input["user_id"] = Auth::id();
        $application = Application::uploadWithFiles($request,$input);
        if($application){
            if($request->get("type") == 1){
                Attempt::newAttempt($application);
                toastSuccess("Заявка успешно создана и отправлена!");
            }
            else{
                toastSuccess("Заявка успешно сохранена!");
            }

            return  redirect()->route("myRequest");
        }
        else{
            return  redirect()->route("myRequest");

        }
    }

    public function change(ChangeApplicationRequest $request){
        $application = Application::where(["id"=>$request->get("id"),"user_id"=>Auth::id()])->withCount('attempts')->first();
        if($application && $application->attempts_count == 0){
            try{
                $input = $request->all();
                $input["anketa"] = ($input["anketa"][0] == null && $input["anketa"] == "[]" ) ? [] : $input["anketa"];
                $application->editWithFiles($request,$input);
                if($request->get("type") == 1){
                    Attempt::newAttempt($application);
                    toastSuccess("Заявка успешно создана и отправлена!");
                }
            }
            catch (\Exception $e){
            }
            return  redirect()->route("myRequest");


        }
        else{
            toastWarning("К сожалению заявка не найдена");
            return  redirect()->route("myRequest");
        }
    }

    public function delete(Request $request){
        $application = Application::where(["id"=>$request->get("id"),"user_id"=>Auth::id()])->withCount('attempts')->first();
        if($application && $application->attempts_count == 0){
            $application->removeWithFiles();
            toastSuccess("Успешно удалено");
        }
        else{
            toastWarning("К сожалению заявка не найдена");
        }
        return  redirect()->route("myRequest");

    }
}
