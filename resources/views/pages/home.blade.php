@extends('layouts.main-layout')

@section('content')
    <main>
        
        <ul>
            @foreach ($matches as $match)
                <a href="{{ route('show', $match -> id) }}">
                    <li>
                        <div class="info">
                            {{ $match-> team1 }} - {{ $match-> team2 }}
                        </div>

                        <div class="opt">
                            <a href="{{ route('edit', $match -> id) }}">
                                <i class="fas fa-pen"></i>
                            </a>
                        </div>
                    </li>
                </a>
            @endforeach
        </ul>

        <a href="{{ route('create') }}">
            <button>
                Add New
            </button>
        </a>
        
    </main>
@endsection