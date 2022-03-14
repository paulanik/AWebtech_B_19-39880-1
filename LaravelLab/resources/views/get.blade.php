@extends('layout')
@section('content')
    <h1>Get</h1>
    <h4>Name : {{$name}}</h4>
    <h4>Id : {{$id}}</h4>
    <ol>
        @for($i=0;$i<count($courses);$i++)
            <li>{{$courses[$i]}}</li>
        @endfor
    </ol>
    <ul>
        @foreach($courses as $c)
            <li>({{$loop->iteration}}) {{$c}}</li>
        @endforeach
    </ul>
@endsection
