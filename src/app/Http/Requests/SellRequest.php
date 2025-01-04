<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellRequest extends FormRequest
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
            'category_id' => ['required'],
            'status_id' => ['required'],
            'name' => ['required'],
            'image' => ['required'],
            'detail' => ['required'],
            'price' => ['required', 'integer', 'max:1000000'],
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'カテゴリーを選択してください',
            'status_id.required' => '商品の状態を選択してください',
            'name.required' => '商品名を入力してください',
            'image.required' => '画像を選択してください',
            'detail.required' => '商品の説明を入力してください',
            'price.required' => '金額を入力してください',
            'price.integer' => '数字で入力してください',
            'price.max:1000000' => '100万円未満で入力してください',
        ];
    }
}
