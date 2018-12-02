<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TratamientoRequest extends FormRequest
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
            'idRiesgo' => 'unique:tratamiento'
        ];
    }

    public function messages()
    {
        return [
            'idRiesgo.unique' => 'Ya se ha registrado un plan al riesgo'  
        ];
    }
}
