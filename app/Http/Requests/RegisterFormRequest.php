<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
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
            'over_name' => 'required|string|max:10',
            'under_name' => 'required|string|max:10',
            'over_name_kana' => 'required|string|max:30',
        ];
    }

    public function messages(){
        return [
            'over_name.required' => '入力必須です',
            'over_name.string' => '形式が異なります',
            'over_name.max' => '最大10文字までです',
            'under_name.required' => '入力必須です',
            'under_name.string' => '形式が異なります',
            'under_name.max' => '最大10文字までです',
            'over_name_kana.required' => '入力必須です',
            'over_name_kana.string' => '形式が異なります',
            'over_name_kana.max' => '最大30文字までです',
        ];
    }
}
