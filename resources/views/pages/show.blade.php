@extends('layouts.main-layout')

@section('content')
    <main>

        <table>
            <thead>
                <td>Team 1</td>
                <td>Team 2</td>
            </thead>
            <tr>
                <td>{{ ucfirst($match-> team1) }}</td>
                <td>{{ ucfirst($match-> point1) }}</td>
            </tr>
            
            <tr>
                <td>{{ ucfirst($match-> team2) }}</td>
                <td>{{ ucfirst($match-> point2) }}</td>
            </tr>
        
            <tr>
                <td>Winner</td>
                @if ($match-> result)
                
                    <td class="winner">{{ ucfirst($match-> team2) }}</td>
                @else
                        
                    <td class="winner">{{ ucfirst($match-> team1) }}</td>
                @endif
            </tr>
        </table>
        
        
    </main>
@endsection