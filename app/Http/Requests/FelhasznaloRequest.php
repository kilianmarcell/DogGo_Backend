<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FelhasznaloRequest extends FormRequest
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
            'felhasznalonev' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string',
        ];
    }
}
