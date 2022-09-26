<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
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
                    'user_id' => 'required|exists:users,id',
                    'question_id' => 'required|exists:questions,id',
                    'answer' => 'required|string',
                ];
            break;
            case 'PUT':
                return [
                    'user_id' => 'required|exists:users,id',
                    'question_id' => 'required|exists:questions,id',
                    'answer' => 'required|string',
                ];
            break;
        }
    }
}
