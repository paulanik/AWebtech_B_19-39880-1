@extends('layout')
@section('content')
<h1>List</h1>
<table border="1" align="center">
    <tr>
        <th>Name</th>
        <th>Student_Id</th>
        <th>Cgpa</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>action</th>
    </tr>
    @foreach($students as $s)
        <tr>


            <td><a href="{{route('details', ['id' => $s->id,'name'=>$s->name])}}">{{$s->name}}</td>
            <td>{{$s->s_id}}</td>
            <td>{{$s->cgpa}}</td>
            <td>{{$s->gender}}</td>
            <td>{{$s->hobbies}}</td>
            <td>{{$s->created_at}}</td>
            <td>{{$s->updated_at}}</td>
            <td> <!--  <button class="btn btn-success"><a href="{{route('edit', ['id' => encrypt($s->id) ] )}}">edit</button>  -->
                 <button class="btn btn-success"><a href="{{route('edit', ['id' => $s->id ] )}}">edit</button>
                 <button class="btn btn-danger"><a href="{{route('delete', ['id' => $s->id])  }}">Delete</button></td>
        </tr>
    @endforeach
</table>
@endsection
