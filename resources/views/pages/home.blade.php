@extends('layouts.main-layout')

@section('content')
    <main>
        
        <ul>
            @foreach ($matches as $match)
                <li>
                    <a href="{{ route('show', $match -> id) }}">
                        {{ ucfirst($match-> team1) }} - {{ ucfirst($match-> team2) }}
                    </a>

                    <div class="opt">
                        <a href="{{ route('edit', $match -> id) }}">
                            edit
                        </a>
                        <a href="{{ route('destroy', $match -> id) }}">
                            delete
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>

        <a href="{{ route('create') }}">
            <button>
                Add New
            </button>
        </a>
        
    </main>
@endsection