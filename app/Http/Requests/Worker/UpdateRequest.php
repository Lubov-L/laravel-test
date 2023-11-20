<?php

namespace App\Http\Requests\Worker;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
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
