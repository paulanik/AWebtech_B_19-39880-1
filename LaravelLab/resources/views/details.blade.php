@extends('layout')
@section('content')
    <h1>Details</h1>
    <h1>Details</h1>
      <h4>Id : {{$id}}</h4>
    <h4>Name : {{$name}}</h4>

    <table border="1">
        <tr>
          <th>id</th>
          <th>name</th>
        </tr>
             <tr>
                 <td>{{$id}}</td>
                 <td>{{$name}}</td>
             </tr>
    </table>
@endsection
