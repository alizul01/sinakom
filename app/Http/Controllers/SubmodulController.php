<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Models\Submodul;
use Illuminate\Http\Request;

class SubmodulController extends Controller
{
    public function index(Modul $modul) {
        $submodul = Submodul::where('id', $modul->id)->get();
        return view('misc.player', [
            'data' => $submodul
        ]);
    }
}
