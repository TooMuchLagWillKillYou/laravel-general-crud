@extends('layouts.main-layout')

@section('content')
    <main>

        <table>
            <tr>
                <td>Team 1</td>
                <td>{{ $match-> team1 }}</td>
                <td>{{ $match-> point1 }}</td>
            </tr>
            
            <tr>
                <td>Team 2</td>
                <td>{{ $match-> team2 }}</td>
                <td>{{ $match-> point2 }}</td>
            </tr>
        
            <tr>
                <td>Result</td>
                <td>{{ $match-> result }}</td>
            </tr>
        </table>
        
        @if ($match-> result)
        
            <p>Winner is {{ $match-> team2 }}</p>
        @else
                
            <p>Winner is {{ $match-> team1 }}</p>
        @endif
        
    </main>
@endsection