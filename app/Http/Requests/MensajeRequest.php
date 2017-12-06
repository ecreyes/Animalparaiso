<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MensajeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    //determina si el usuario esta autorizado
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    //parametros a validar del tipo name en el form de html
    public function rules()
    {
        return [
            'email'=>'required|email',
            'asunto'=>'required',
            'mensaje'=>'required'
        ];
    }
}
