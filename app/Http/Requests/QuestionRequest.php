<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
                    'quiz_id' => 'required|exists:quizzes,id',
                    'question' => 'required|string',
                    'image' => 'nullable|image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'answer1' => 'required|string',
                    'answer2' => 'required|string',
                    'answer3' => 'required|string',
                    'answer4' => 'required|string',
                    'correct_answer' => 'required',
                ];
            break;
            case 'PUT':
                return [
                    'quiz_id' => 'required|exists:quizzes,id',
                    'question' => 'required|string',
                    'image' => 'nullable|image|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'answer1' => 'required|string',
                    'answer2' => 'required|string',
                    'answer3' => 'required|string',
                    'answer4' => 'required|string',
                    'correct_answer' => 'required',
                ];
            break;
        }
    }
}
