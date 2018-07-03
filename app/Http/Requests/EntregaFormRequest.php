<?php

namespace saparicio\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntregaFormRequest extends FormRequest
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
        //---INGRESO---
            'cicliente'=>'required',
            'cipromotor',
            'estado',
            
            //--DETALLE-INGRESO
            'idProd'=>'required',
            'cantidad'=>'required',
            'precio'=>'required',
            'descuento',

        ];
    }
}
