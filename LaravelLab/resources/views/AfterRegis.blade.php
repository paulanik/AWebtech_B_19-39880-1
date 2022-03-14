@extends('layout')
@section('content')

    <h4 style="padding-top:50px;">Name : {{$name}}</h4>
    <h4>Id : {{$id}}</h4>
    <h4>cgpa : {{$cgpa}}</h4>
    <h4>gender : {{$gender}}</h4>
    <h4>hobbies :</h4>
    @for($i=0;$i<count($hobbies);$i++)
     <li style="color:rgb(96, 194, 40);">{{$hobbies[$i]}}</li>
    @endfor
@endsection
