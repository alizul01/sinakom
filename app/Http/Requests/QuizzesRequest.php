<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizzesRequest extends FormRequest
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
                    'modul_id' => 'required|exists:moduls,id',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'quiz_path' => 'required',
                    'desc' => 'required|string',
                    'status' => 'required|in:dibuka,draft,ditutup',
                    'finished_at' => 'nullable|date',
                    'started_at' => 'nullable|date',
                ];
            break;
            case 'PUT':
                return [
                    'modul_id' => 'required|exists:moduls,id',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'quiz_path' => 'required',
                    'desc' => 'required|string',
                    'status' => 'required|in:dibuka,draft,ditutup',
                    'finished_at' => 'nullable|date',
                    'started_at' => 'nullable|date',
                ];
            break;
        }
    }
}
