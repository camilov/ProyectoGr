<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ControlesCreateRequest extends FormRequest
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
        $value1 = Request::get('idRiesgo');
        $value2 = Request::get('idOpcionTratamiento');
        $value3 = Request::get('idAccion');
        //dd($value );
        return [
            
            'idControlL' => Rule::unique('controles')->where(function($query) use ($value1,$value2,$value3){
                return $query->where([['idRiesgo',$value1],['idOpcionTratamiento',$value2],['idAccion',$value3]]);
            })
            /*'idRiesgo' => Rule::unique('tratamiento')->where(function ($query) use ($value) {
                return $query->where('idOpcionTratamiento', $value);
            })*/
        ];
    }

    public function messages()
    {
        return [
            'idControlL' => 'Ya se ha registrado este control para esta opcion de tratamiento e riesgo'  
        ];
    }
}
