<?php

namespace saparicio\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargoFormRequest extends FormRequest
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
            //'idCargo'=>'required',
            'cargo'=>'max:20',
            'estado'=>'max|10'
        ];
    }
}
