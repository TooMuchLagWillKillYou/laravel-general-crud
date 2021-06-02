@extends('layouts.main-layout')

@section('content')
    <main>

        <form action="{{ route('update', $match -> id) }}" method="post">

            @csrf
            @method('POST')

            <div class="input-form">
                <label for="team1">Team 1</label>
                <input type="text" name="team1" id="team1" value="{{ ucfirst($match -> team1 )}}">
            </div>
            
            <div class="input-form">
                <label for="team2">Team 2</label>
                <input type="text" name="team2" id="team2" value="{{ ucfirst($match -> team2 )}}">
            </div>
                
            <div class="input-form">
                <label for="point1">Point 1</label>
                <input type="number" name="point1" id="point1" value="{{ ucfirst($match -> point1) }}">
            </div>

            <div class="input-form">
                <label for="point2">Point 2</label>
                <input type="number" name="point2" id="point2" value="{{ ucfirst($match -> point2) }}">
            </div>

            <div>
                <label for="result">Result</label>
                <select type="text" name="result" id="result">
                    @if ($match -> result)
                        <option value="0">Team 1</option>
                        <option value="1" selected>Team 2</option>
                    @else
                        <option value="0" selected>Team 1</option>
                        <option value="1">Team 2</option>
                    @endif
                </select>
            </div>

            <a href="">
                <button type="submit">Update</button>
            </a>

        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </main>
@endsection