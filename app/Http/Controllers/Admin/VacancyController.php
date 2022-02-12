<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Vacancy::paginate(10);
        return view('admin.vacancies.index', compact('data'));
    }

    public function delete()
    {
        $data = Vacancy::paginate(10);
        return view('admin.vacancies.destroy', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vacancies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
           'region'  => 'required',
            'requirements' => 'required'
        ], [], [
            'title' => 'Вакансия',
            'region' => 'Регион',
            'requirements' => 'Требования'
        ]);
        Vacancy::create([
            'title' => $request['title'],
            'region' => $request['region'],
            'requirements' => $request['requirements']
        ]);
        return redirect(route('vacancies.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();
        return redirect()->back();
    }
}
