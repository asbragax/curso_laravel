<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */

     //TESTE
     
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'description' => 'required|min:5',
            'phone' => 'required',
            'email' => 'required',
        ];
    }
}
