<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveApplicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name"=>"required|max:255",
            "birthplace"=>"required|max:255",
            "iin"=>"required|digits:12",
            "education"=>"required|max:255",
            "car_licence"=>"required",
            "experience"=>"required|max:255",
            "army_service"=>"required|max:255",
            "army_section_id"=>"sometimes|nullable|max:255",
            "position"=>"sometimes|nullable|max:255",
            "rank"=>"sometimes|nullable|max:255",
            "vtsh"=>"required|max:255",
            "branch_name"=>"sometimes|nullable|max:255",
            "year_service"=>"sometimes|nullable|max:255",
            "wanted_position"=>"required|max:255",
            "contract_term"=>"required|max:255",
            "region"=>"required|max:255",
            "phone"=>"required|max:255",
            "email"=>"required|email|max:255",
            "photo"=>"required|file|max:100000",
            "id_document"=>"required|file|max:100000",
            "autobiography"=>"required|file|max:100000",
            "diploma"=>"required|file|max:100000",
            "declaration"=>"required|file|max:100000",
            "work_book"=>"required|file|max:100000",
            "military_id"=>"required|file|max:100000",
        ];
    }
}
