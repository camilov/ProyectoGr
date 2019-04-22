<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        $value = Request::get('idOpcionTratamiento');
        //dd($value );
        return [
            
            'idRiesgo' => Rule::unique('tratamiento')->where(function ($query) use ($value) {
                return $query->where('idOpcionTratamiento', $value);
            })
        ];
    }
    public function messages()
    {
        return [
            'idRiesgo' => 'Ya se ha registrado la opcion de tratamiento para el riesgo'  
        ];
    }
}
