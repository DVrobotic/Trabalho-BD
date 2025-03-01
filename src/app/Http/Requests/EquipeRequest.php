<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|min:3|max:255',
            'modalidade_id' => 'required|exists:modalidades,id',
            'campeonato_id' => 'required|min:1|array',
            'campeonato_id.*' => 'required|exists:campeonatos,id',
        ];
    }
}
