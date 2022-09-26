<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class TestsController extends Controller {

    public function tests(Quiz $quiz){
        $test = Question::where('quiz_id', $quiz->id)->orderBy('sorting', 'ASC')->get();
        return view('quizzes.tests', compact('test'));
    }
}
