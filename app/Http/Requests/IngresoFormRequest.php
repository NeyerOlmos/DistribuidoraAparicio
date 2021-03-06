<?php

namespace saparicio\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngresoFormRequest extends FormRequest
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
            'idProveedor'=>'required',
            'tipoComprobante'=>'required|max:20',
            'serieComprobante'=>'max:7',
            'numComprobante'=>'required|max:10',
            //--DETALLE-INGRESO
            'idProd'=>'required',
            'cantidad'=>'required',
            'precioCompra'=>'required',
            'precioVenta'=>'required'

        ];
    }
}
