<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use App\Http\Requests\QuizzesRequest;
use App\Models\Question;

class QuizController extends Controller {

    public function index() {
        $quizzez = Quiz::where('status', 'dibuka')->orderBy('updated_at', 'DESC')->get();
        $result = count(auth()->user()->result) > 0 ? auth()->user()->result : null;
        return view('quizzes.index', compact('quizzez', 'result'));
    }

    public function create() {
        return view('quizzes.create');
    }

    public function store(QuizzesRequest $request) {
        $quiz = $request->validated();
        Quiz::create($quiz);
        return redirect()->route('quizzes')->with('success', 'Quiz berhasil ditambahkan');
    }

    public function show(Quiz $quiz) {
        $quiz = Quiz::where('slug', $quiz->slug)->first();
        return view('quizzes.show', [
            'quiz' => $quiz,
        ]);
    }

    public function edit(Quiz $quiz) {
         $quiz = Quiz::where('slug', $quiz->slug)->first();
        return view('quizzes.edit', [
            'quiz' => $quiz,
        ]);
    }

    public function update(QuizzesRequest $request, Quiz $quiz) {
        $quiz = Quiz::where('slug', $quiz->slug)->first();
        $quiz->update($request->validated());
        return redirect()->route('quizzes')->with('success', 'Quiz berhasil diubah');
    }

    public function destroy(Quiz $quiz) {
        Quiz::destroy($quiz->quiz_path);
        return redirect()->route('quizzes')->with('success', 'Quiz berhasil dihapus');
    }
}
