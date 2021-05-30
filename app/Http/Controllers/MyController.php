<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Match;

class MyController extends Controller
{
    public function home(){

        $matches = Match::all();

        return view('pages.home', compact('matches'));
    }

    public function show($id){

        $match = Match::findOrFail($id);

        return view('pages.show', compact('match'));
    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){

        $valid = $request->validate([

            'team1' => 'required|string|min:3|max:255',
            'team2' => 'required|string|min:3|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean'
        ]);

        $match = Match::create($valid);

        return redirect() -> route('home');
    }

    public function edit($id){

        $match = Match::findOrFail($id);

        return view('pages.edit', compact('match'));
    }

    public function update(Request $request, $id){

        $valid = $request->validate([

            'team1' => 'required|string|min:3|max:255',
            'team2' => 'required|string|min:3|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean'
        ]);

        $match = Match::findOrFail($id);
        $match -> update($valid);

        return redirect() -> route('home');
    }
}


