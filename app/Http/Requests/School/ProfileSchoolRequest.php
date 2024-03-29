<?php

namespace kindergestion\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class ProfileSchoolRequest extends FormRequest
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
            'nombre'=>'required|min:5',
            'cp'=>'required|numeric',
            'telefono'=>'required|numeric',
            'direccion'=>'required|min:5',
            'ciudad'=>'required|min:5',
        ];
    }
}
