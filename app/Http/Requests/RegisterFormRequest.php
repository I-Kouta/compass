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
            'under_name_kana' => 'required|string|max:30',
            'mail_address' => 'required|string|email|max:100|unique:users',
            'sex' => 'required|string|between:1,3',
            'role' => 'required|string|between:1,4',
            'password' => 'required|string|min:8|max:30|confirmed',
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
            'under_name_kana.required' => '入力必須です',
            'under_name_kana.string' => '形式が異なります',
            'under_name_kana.max' => '最大30文字までです',
            'mail_address.required' => '入力必須です',
            'mail_address.string' => 'アドレス形式で入力してください',
            'mail_address.email' => 'アドレス形式で入力してください',
            'mail_address.unique' => '既に登録されているアドレスです',
            'mail_address.max' => '最大100文字までです',
            'sex.required' => '入力必須です',
            'sex.string' => '形式が異なります',
            'sex.between' => '無効な値です',
            'role.required' => '入力必須です',
            'role.string' => '形式が異なります',
            'role.between' => '無効な値です',
            'password.required' => '入力必須です',
            'password.string' => '形式が異なります',
            'password.min' => '8文字以上入力してください',
            'password.max' => '最大30文字までです',
            'password.confirmed' => 'パスワードが一致しません',
        ];
    }
}
