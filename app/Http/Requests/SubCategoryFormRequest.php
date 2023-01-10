<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCategoryFormRequest extends FormRequest
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
            'main_category_id' => 'required',
            'sub_category' => 'required|max:100|string|unique:main_categories',
        ];
    }

    public function messages()
    {
        return [
            'main_category_id.required' => '入力必須です。',
            'sub_category.required' => '入力必須です。',
            'sub_category.max' => '100文字以内で入力してください。',
            'sub_category.string' => '形式が異なります。',
            'sub_category.unique' => 'すでに存在しているカテゴリーです。',
        ];
    }
}
