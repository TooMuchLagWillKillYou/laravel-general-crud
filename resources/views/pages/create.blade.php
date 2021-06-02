@extends('layouts.main-layout')

@section('content')
    <main>

        <form action="{{ route('store') }}" method="post">

            @csrf
            @method('POST')

            <div class="form-grid">

                <div class="input-form">
                    <label for="team1">Team 1</label>
                    <input type="text" name="team1" id="team1">
                </div>
                
                <div class="input-form">
                    <label for="team2">Team 2</label>
                    <input type="text" name="team2" id="team2">
                </div>
                    
                <div class="input-form">
                    <label for="point1">Point 1</label>
                    <input type="number" name="point1" id="point1">
                </div>
    
                <div class="input-form">
                    <label for="point2">Point 2</label>
                    <input type="number" name="point2" id="point2">
                </div>

            </div>

            
            <div class="input-form">
                <label for="result">Result</label>
                <select type="text" name="result" id="result">
                    <option value="0">Team 1</option>
                    <option value="1">Team 2</option>
                </select>
            </div>
            
            <a href="">
                <button type="submit">Submit</button>
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