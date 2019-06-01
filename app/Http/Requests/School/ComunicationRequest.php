<?php

namespace gkinder\Http\Requests\School;

use Illuminate\Foundation\Http\FormRequest;

class ComunicationRequest extends FormRequest
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
            'tutor_id' => 'required',
            'subject' => 'required|min:5',
            'body' => 'required',
        ];
    }
}
