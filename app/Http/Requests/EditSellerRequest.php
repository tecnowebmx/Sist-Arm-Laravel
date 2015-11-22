<?php

namespace ARM\Http\Requests;

use ARM\Http\Requests\Request;

class EditSellerRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ];
    }
}
