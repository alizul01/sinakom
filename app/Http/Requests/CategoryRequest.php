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
     * @return array<string, mixed>
     */
    public function rules() {
        switch($this->method()){
            case 'POST':
                return [
                    'name' => 'required|string|unique:categories,name',
                ];
            break;
            case 'PUT':
                return [
                    'name' => 'required|string|unique:categories,name',
                ];
            break;
        }
    }
}
