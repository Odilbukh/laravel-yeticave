<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|password',
            'message' => 'required|max:500'
        ];
    }

    public function messages()
    {
        return
        [
          'name.required' => 'Укажите Ваше ФИО',
          'email.required' => 'Введите электронный адрес',
          'password.required' => 'Введите пароль',
          'message.required' => 'Напишите как с вами связаться',
        ];
    }
}
