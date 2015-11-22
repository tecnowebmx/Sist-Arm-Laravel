<?php

namespace ARM\Http\Requests;

use ARM\Http\Requests\Request;

class CreateProspectRequest extends Request
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
            'name' => 'required',
            'contact' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ];
    }
}
