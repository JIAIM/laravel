<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mouse2Controller extends Controller
{
    public function form(Request $request) {
        echo $request->input('text');
        return view('mouse.form');
    }
    public function result(Request $request) {
        $text = $request->input('text');
        return view('mouse.result', ['text' => $text]);
    }
}
