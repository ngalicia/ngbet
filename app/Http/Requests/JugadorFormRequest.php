<?php

namespace Proyecto1\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorFormRequest extends FormRequest
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
            'nombre' => 'required|max:100',
            'fecha_nacimiento' => 'required',
            'altura' => 'required',
            'peso' => 'required',
            'camisola' => 'required',
            'posicion' => 'required|max:100',
            'goles' => 'required',
            'id_seleccion' => 'required',
        ];
    }
}
