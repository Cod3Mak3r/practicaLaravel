@extends('layout')

@section('title', 'Portfolio')

@section('content')
   <h2>Mi portafolio</h2>

    <ul>
        @isset($portfolio)
            @foreach ($portfolio as $item )
                <li> {{$item['title']}} </li>
            @endforeach
        @else
            <p> * No tienes proyectos para mostrar * </p>
        @endisset
    </ul>

@endsection
