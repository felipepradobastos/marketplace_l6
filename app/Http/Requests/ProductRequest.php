<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'description' => 'required|Min:10',
            'body' => 'required|Min:20',
            'price' => 'required',
            'slug'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => "O campo :attribute é obrigatório.",
            'min' => 'Campo deve ter no mínimo :min caracteres.',
        ];
    }

}
