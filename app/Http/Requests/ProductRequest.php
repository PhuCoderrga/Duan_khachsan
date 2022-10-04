<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class ProductRequest extends FormRequest
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
            'name' => ['max:255','min:5'],
            'price' => ['integer'],
            'price_discount' => ['integer'],
            'desc_short' => ['max:300', 'min:5'],
            'desc_long' => ['max:1200', 'min:5'],
            'feature_img' => ['required','image','mimes:jpeg,jpg,png,bmp,gif,svg']
        ];
    }
    public function messages()
    {
        return [
            'name.max' => 'Chiều dài tên tối đa là 255 kí tự',
            'name.min' => 'Chiều dài tên ngắn nhất là 5 kí tự',
            'price.integer' => 'Kiểu dữ liệu phải là số',
            'price_discount.integer' => 'Kiểu dữ liệu phải là số',
            'desc_short.max' => 'Chiều dài tên tối đa là 300 kí tự',
            'desc_short.min' => 'Chiều dài tên ngắn nhất là 5 kí tự',
            'desc_long.max' => 'Chiều dài tên tối đa là 1200 kí tự',
            'desc_long.min' => 'Chiều dài tên ngắn nhất là 5 kí tự',
            'feature_img.image' => 'Phải là hình ảnh',
            'feature_img.mimes' => 'Hình ảnh đuôi chấm: .jpeg .jpg .png .bmp .gif .svg',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
          throw (new ValidationException($validator))
            ->errorBag($this->errorBag)
        ->redirectTo($this->getRedirectUrl());
    }
}