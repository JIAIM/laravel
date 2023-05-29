<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(){
        $films = Film::where('year','>=',200)->get();
        foreach ($films as $film){
            dump($film->title);
        }
        dd($films);
    }

    public function create(){
        $filmsArr = [
            [
                'title' => 'The Green Mile',
                'director' => 'Frank Darabont',
                'image' => 'The_Green_Mile_(movie_poster).jpeg',
                'year' => '1999',
            ],
            [
                'title' => 'Back to the Future',
                'director' => 'Robert Zemeckis',
                'image' => 'Back_to_the_Future.jpeg',
                'year' => '1985',
            ],
        ];

        foreach ($filmsArr as $film){
            Film::create($film);
        }

        dd('create completed');
    }

    public function update(){
        $film = Film::find(20);
        $film->update([
            'year'=>'2019',
        ]);
    }

    public function delete(){
        return 'GG';
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
