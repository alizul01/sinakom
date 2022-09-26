<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseListRequest extends FormRequest
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
    public function rules()
    {
       switch($this->method()){
            case 'POST' :
                return [
                    'course_name' => 'required|max:255',
                    'price' => 'required|integer',
                    'description' => 'required|max:255',
                ];
            break;
            case 'POST' :
                return [
                    'course_name' => 'required|max:255',
                    'price' => 'required|integer',
                    'description' => 'required|max:255',
                ];
            break;
       }
    }
}
