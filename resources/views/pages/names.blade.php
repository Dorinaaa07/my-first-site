@extends('layouts.app')

@section('title', '| Nevek')

@section('content')
    <div class="container">

        <ul>
        @foreach($names as $name)
            <li @if($name == 'Traza') style="font-weight:bold;" @endif>
                @if($loop->last) Utolsó: @endif
                {{ $name }}
            </li>
        @endforeach
        </ul>

    </div>
@endsection