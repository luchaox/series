<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return[
            'required' => 'O campo :attribute é obrigatorio',
            'nome.min' => 'O campo nome precisa ter pelo menos 5 caracteres'
        ];
    }
}
