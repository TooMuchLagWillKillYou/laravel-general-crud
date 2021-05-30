@extends('layouts.main-layout')

@section('content')
    <main>
        
        <ul>
            @foreach ($matches as $match)
                <li>
                    <a href="{{ route('show', $match -> id) }}">
                        {{ $match-> team1 }} - {{ $match-> team2 }}
                    </a>

                    <div class="opt">
                        <a href="{{ route('edit', $match -> id) }}">
                            <i class="fas fa-pen"></i>
                        </a>
                        <a href="{{ route('destroy', $match -> id) }}">
                            <div class="del">
                                <i class="fas fa-times"></i>
                            </div>
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