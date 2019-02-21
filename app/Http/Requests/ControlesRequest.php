<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ControlesRequest extends FormRequest
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
            'idControl' => 'unique:Controles'
        ];
    }


    public function messages()
    {
        return [
            'idControl.unique' => 'Ya se ha asignado el control a este riesgo'  
        ];
    }
}
