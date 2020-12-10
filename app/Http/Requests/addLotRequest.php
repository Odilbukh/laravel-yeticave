<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addLotRequest extends FormRequest
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
            'lot-name' => 'required|max:250',
            'category' => 'required',
            //'lot-img' => 'required|image',
            'lot-rate' => 'required|integer',
            'lot-step' => 'required|integer',
            'lot-date' => 'required|date'
        ];
    }

    public function messages()
    {
        return
        [
            'lot-name.required' => 'Введите название лота',
            'lot-name.max' => 'Слишком длинной названия лота',
            'category.required' => 'Укажите категорию лота',
            //'lot-img.required' => 'Загрузите фото лота',
            'lot-img.image' => 'Вы можете загрузит только фото в форматах jpeg, png, bmp, gif, или svg',
            'lot-rate.required' => 'Цена должна быть больше 0',
            'lot-rate.integer' => 'Только цифры',
            'lot-step.required' => 'Цена должна быть больше 0',
            'lot-step.integer' => 'Только цифры',
            'lot-date.required' => 'Введите дату окончания действия лота',
            'lot-date.date' => 'Неправильный формат'
        ];
    }
}
