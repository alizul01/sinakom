<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index() {
        $course = Modul::limit(9)->get();
        return view('course.list', [
            'course' => $course
        ]);
    }

    public function show($slug) {
        $course = Modul::where('slug', $slug)->first();
        return view('course.detail', [
            'course' => $course
        ]);
    }
}
