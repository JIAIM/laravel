<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class MouseController extends Controller
{
    public function show(int $id,string $name) {
        return 'team id = '.$id.' name = '.$name;
    }

    public function show2(){
        $arr = array(
            'title' => 'Вірш',
            'var1' => 'Садок вишневий коло хати',
            'var2' => 'Хрущі над вишнями гудуть',
        );
        return view('mouse.show', compact('arr'));
    }
}
