<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Обязательное поле',
            'name.string' => '"Это поле должно быть строкой"',
            'surname.required' => 'Обязательное поле',
            'surname.string' => '"Это поле должно быть строкой"',
            'email.required' => 'Обязательное поле',
            'email.email' => '"Это поле должно быть формата email"',
            'age.integer' => '"Это поле должно быть числом"',
            'description.string' => '"Это поле должно быть строкой"',
        ];
    }
}
