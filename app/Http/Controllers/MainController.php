<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function listQuestion(Question $question) {
        return view('exams.index', [
            'questions' => $question
        ]);
    }
}
