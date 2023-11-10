<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            // 'name' => ['required', 'string', 'max:10', 'unique:categories']

            'name' => 'required|string|max:10|unique:categories'

            // 'name' => 'required',
            // 'name' => 'string',
            // 'name' => 'max:10',
            // 'name' => 'unique:categories'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'カテゴリを入力して下さい',
            'name.string' => 'カテゴリを文字列で入力して下さい。',
            'name.max' => 'カテゴリを１０文字以下で入力して下さい',
            'name.unique' => 'カテゴリがすでに存在しています'
        ];
        
    }


}
