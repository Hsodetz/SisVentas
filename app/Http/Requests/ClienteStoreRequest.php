<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
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
            'nombre'        => 'required|min:3|max:60',
            'apellido'      => 'required|min:3|max:60',
            'telefono'      => 'required|min:3|max:20',
            'direccion'     => 'required|min:5|max:120',
            'ruc'           => 'required',
            'empresa'       => 'required',
            'estado'        => 'required',
        ];
    }
}
