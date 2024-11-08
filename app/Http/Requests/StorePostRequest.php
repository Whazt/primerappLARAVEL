<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'content' => 'required',
            'category' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El campo titulo es obligatorio',
            'title.string' => 'El campo titulo debe ser de tipo string',
            'title.max' => 'El campo titulo debe tener un máximo de 255 caracteres',
            'content.required' => 'El campo contenido es obligatorio',
            'category.required' => 'El campo categoria es obligatorio',
        ];
    }
}
