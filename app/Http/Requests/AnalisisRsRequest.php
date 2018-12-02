<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnalisisRsRequest extends FormRequest
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

           'idRiesgo' => 'unique:analisis_rs'
        ];
    }

    public function messages()
    {
        return [
            'idRiesgo.unique' => 'El Riesgo ya ha sido analizado'  
        ];
    }
}
