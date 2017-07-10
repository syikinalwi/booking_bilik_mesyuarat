<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatebookingroomRequest extends Request
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
        'department_name'=>'required',
        'title'=>'required',
        'start'=>'required',
        'time'=>'required',
        'stuff_list'=>'required',
        'meetingtitle_name'=>'required',
        'drink_name'=>'required',
        'food_name'=>'required',
        ];
    }
}
