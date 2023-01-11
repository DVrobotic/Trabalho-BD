<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

    /*
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|string|min:3|max:255',
            'sobrenome' => 'required|string|min:3|max:255',
            'cpf' => 'required|string|min:3|max:255',
            'endereço' => 'required|string|min:3|max:255',
            'email' => 'required|email|string|unique:users' . ($this->getMethod() != "PUT" ?  '':',email,' . $this->user->id),
            'senha' => ($this->getMethod() != "PUT" ? 'required|' : 'nullable|') . 'string|min:8|confirmed',
            'senha_confirmation' => 'required_with:password',
        ];
    }
}
