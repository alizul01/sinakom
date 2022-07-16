<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller {

    public function detail(User $user) {
        return view('students.detail', [
            'student' => $user
        ]);
    }
}
