<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TravelRequest extends Request
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

            'Name' => 'required|min:5',

            'Phone' => 'required|regex:/\([0-9]{2}\)9{0,1}[0-9]{4}-[0-9]{4}/',
            'DateFrom' => 'required',
            'DateTo' => 'required',
            'Origin' => 'required',
            'Destination' => 'required',
            'NumberPeople' => 'required|numeric|min:1',
        ];
    }
}
