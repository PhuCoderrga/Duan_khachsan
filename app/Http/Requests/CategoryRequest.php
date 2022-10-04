<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
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
            'name' => ['max:255','min:5'],
            'desc_short' => ['max:300', 'min:5']
        ];
    }
    public function messages()
    {
        return [
            'name.max' => 'Chiều dài tên danh mục tối đa là 255 kí tự',
            'name.min' => 'Chiều dài tên danh mục ngắn nhất là 5 kí tự',
            'desc_short.max' => 'Chiều dài mô tả tối đa là 300 kí tự',
            'desc_short.min' => 'Chiều dài mô tả ngắn nhất là 5 kí tự'
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