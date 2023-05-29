<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Http\Request;
use PHPUnit\Metadata\PostCondition;

class FilmController extends Controller
{
    public function index(){
        $films = Film::all();
        return view('film.index', compact('films'));
    }

    public function create(){
        return view('film.create');
    }

    public function store(){
        $data = request()->validate([
            'title'=>'string',
            'director'=>'string',
            'image'=>'string',
            'year'=>'integer',
        ]);
        Film::create($data);
        return redirect()->route('film.index');
    }

    public function show(Film $film){
        return view('film.show', compact('film'));
    }

    public function edit(Film $film){
        return view('film.edit', compact('film'));
    }

    public function update(Film $film){
        $data = request()->validate([
            'title'=>'string',
            'director'=>'string',
            'image'=>'string',
            'year'=>'integer',
        ]);
        $film->update($data);
        return redirect()->route('film.show',$film->id);
    }

    public function delete(Film $film){
        $film->delete();
        return redirect()->route('film.index');
    }

    public function firstOrCreate(){
        $film = Film::firstOrCreate(
            [
                ['title' => 'Back to the Future',],
                [
                    'title' => 'Back to the Future',
                    'director' => 'Robert Zemeckis',
                    'image' => 'Back_to_the_Future.jpeg',
                    'year' => '1985',
                ],
            ]
        );
        dd($film->title);
    }

    public function updateOrCreate(){
        $film = Film::updateOrCreate(
            [
                ['title' => 'Back to the Future',],
                [
                    'title' => 'Back to the Future',
                    'director' => 'Robert Zemeckis',
                    'image' => 'Back_to_the_Future.jpeg',
                    'year' => '1985',
                ],
            ]
        );
        dd($film->title);
    }
}
