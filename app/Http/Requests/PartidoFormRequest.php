<?php

namespace Proyecto1\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidoFormRequest extends FormRequest
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
            'fecha' => 'required',
            'hora' => 'required',
            'id_seleccion_1' => 'required',
            'id_seleccion_2' => 'required',
            'id_arbitro_1' => 'required',
            'id_arbitro_2' => 'required',
            'id_arbitro_3' => 'required',
            'id_ciudad' => 'required',
        ];
    }
}
