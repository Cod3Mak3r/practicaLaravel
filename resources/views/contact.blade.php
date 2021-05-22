@extends('layout')

@section('title', 'Contact')

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error )
            {{$error}}
        @endforeach
    @endif
    <form method="POST" action=" {{route('contacto')}} ">
        @csrf
        <input type="text" name="nombre" placeholder="Tu nombre..." value="{{old('nombre')}}" required><br>
        <input type="text" name="subject" placeholder="Asunto"  value="{{old('subject')}}" required> <br>
        <input type="email" name="correo" placeholder="Tu correo"  value="{{old('correo')}}" required> <br>
        <textarea name="mensaje" placeholder="Ingresa tu mensaje"  value="{{old('mensaje')}}"></textarea><br>
        <button>Enviar</button>
    </form>

@endsection

