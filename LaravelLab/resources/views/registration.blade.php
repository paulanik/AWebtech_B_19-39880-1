@extends('layout')
@section('content')
<form action="{{route('AfterRegis')}}" method="POST" style="padding-top:50px;">
{{csrf_field()}}
<p>
  <table border="1" align="center">

    <tr>
        <th></th>
        <th></th>

    </tr>
    <tr>
        <td >
          <span>name </span>
        </td>

        <td >
         :<input type="text"  name="name" value="{{old('name')}}" placeholder="username">
         @error('name')
         <span class="btn btn-danger"> {{$message}}</span>
         @enderror
        </td>
    </tr>
    <tr>
        <td>
          <span>id </span>
        </td>

        <td>:<input type="text"  name="id" value="{{old('id')}}" placeholder="id">
         @error('id')
         <span class="btn btn-danger"> {{$message}}</span>
         @enderror</td>
    </tr>
    <tr>
        <td>
          <span>cgpa </span>
        </td>
        <td>:<input type="text"  name="cgpa" value="{{old('cgpa')}}" placeholder="cgpa">
          @error('cgpa')
          <span class="btn btn-danger"> {{$message}}</span>
          @enderror
        </td>
    </tr>
    <tr>
        <td>
          <span>Gender </span>
        </td>
        <td> :<input type="radio" name="gender"  value="Male" <?php if(old('gender')=='Male'){echo 'checked';} ?> >Male
          <input type="radio" name="gender"  value="Female" <?php if(old('gender')=='Female'){echo 'checked';} ?> >Female
          @error('gender')
          <span class="btn btn-danger"> {{$message}}</span>
          @enderror
        </td>
    </tr>
    <tr>
        <td>
          <span>Hobbies </span>
        </td>
        <td>
          :<input type="checkbox" value="Movies" name="hobbies[]"  <?php if( (is_array(old('hobbies')) && in_array('Movies', old('hobbies'))) ) { echo ' checked';} ?> >Movies
          <input type="checkbox" value="Music" name="hobbies[]"  <?php if( (is_array(old('hobbies')) && in_array('Music', old('hobbies'))) ) { echo ' checked';} ?> >Music
          <input type="checkbox"value="Games" name="hobbies[]"  <?php if( (is_array(old('hobbies')) && in_array('Games', old('hobbies'))) ) { echo ' checked';} ?>>Games
          @error('hobbies')
          <span class="btn btn-danger"> {{$message}}</span>
          @enderror
        </td>
            </tr>

            <tr >
                <td ><input type="submit" class="btn btn-success"value="Submit">
                </td>
            </tr>


            </table>
        </form>
    </body>


@endsection
