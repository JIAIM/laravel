<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $name,string $value){
        $data = array(
            'name' => $name,
            'value' => $value
        );
        return view('product_syrokop', $data);
    }
}
