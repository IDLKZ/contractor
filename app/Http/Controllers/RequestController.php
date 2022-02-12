<?php

namespace App\Http\Controllers;

use App\Application;
use App\Attempt;
use App\Contract;
use App\Http\Requests\ChangeApplicationRequest;
use App\Http\Requests\SaveApplicationRequest;
use App\Models\Vacancy;
use App\Offer;
use Carbon\Carbon;
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
        $applications = Application::where("user_id",Auth::id())->with("attempts","offers")->orderBy("updated_at","DESC")->paginate(15);
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
        $attempt = Attempt::find($id);
        if($attempt){
            return view("user.offers",compact("attempt"));
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


    public function updateAttempt(Request $request){
        $request->validate(["status"=>"integer|required","attempt_id"=>"required","offer_id"=>"required"]);
        $attempt = Attempt::find($request->get("attempt_id"));
        $offer = Offer::find($request->get("offer_id"));
        if($attempt){
            $attempt->offered_status = $request->get("status");
            $attempt->comment = $request->get("comment");
            if($attempt->offered_status == 1){
                $attempt->step_id = 5;
            }
            $attempt->save();
        }
        if($offer){
            $offer->status = $request->get("status");
            $offer->comment = $request->get("comment");
            $offer->save();
        }
        return  redirect()->route("myRequest");
    }


    public function contract($id){
        $attempt = Attempt::find($id);
        if($attempt){
            return  view("user.contract",compact("attempt"));
        }
        else{
            return redirect()->back();
        }
    }


    public function signContract(Request $request){
        $attempt = Attempt::find($request->get("id"));
        if($attempt){
            $attempt->signed_date = Carbon::now()->toDateTimeString();
            $attempt->signed_status = 1;
            $attempt->save();
            return redirect()->route("show-request",$attempt->id);
        }
        return redirect()->route("myRequest");
    }

    public function vacancies(){
        $vacancies = Vacancy::paginate(20);
        return view("user.vacancies",compact("vacancies"));
    }

    public function searchVacancies(Request $request){
        $vacancies = Vacancy::where("title","like","%".$request->get("title")."%")->orWhere("region","like","%".$request->get("region")."%")->paginate(20);
        return view("user.vacancies",compact("vacancies"));

    }
}
