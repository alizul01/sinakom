<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use App\Http\Requests\AnswerRequest;
use App\Models\Question;
use App\Models\Result;

class AnswerController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnswerRequest $request) {
        $validated = $request->validated();
        $validated['user_id'] = auth()->user()->id;
        Answer::create($validated);
        $question = Question::where('id', $validated['question_id'])->get();
        $correct = 0;

        foreach($question as $questions) {
            if($validated['answer'] == $questions->correct_answer) {
                $correct++;
            }
        }

        $points = round(100 / (count($questions->correct_answer)) * $correct);
        $wrong = count($questions->correct_answer) - $correct;
        $empty = count($questions->correct_answer) - count($validated['answer']);

        Result::create([
            'user_id' => auth()->user()->id,
            'quiz_id' => $questions->quiz_id,
            'points' => $points,
            'wrong' => $wrong,
            'empty' => $empty,
        ]);
        return redirect()->route('quizzes')->with('success', 'Kuis berhasil diselesaikan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnswerRequest $request, Answer $answer) {
        $validated = $request->validated();
        Answer::where('id', $answer->id)->update($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
