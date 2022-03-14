@extends('layout')
@section('content')
<form action="{{route('editsubmit')}}" method="POST" style="padding-top:50px;">
{{csrf_field()}}
<p>
  <?php
  //logics for checkbox values for hobbies
  $hobbies=$students->hobbies;
  $hobbies=explode(',',$hobbies);
  $hobbies=collect($hobbies);       //collection use krle contains call kora lagay
// dd($hobbies)
//  dump($hobbies,explode(',',$hobbies),collect(explode(',',$hobbies)));
   ?>
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

          :<input type="text"  name="name" value="{{$students->name}}" placeholder="username">


         @error('name')
         <span class="btn btn-danger"> {{$message}}</span>
         @enderror
        </td>
    </tr>
    <tr>
        <td>
          <span>id </span>
        </td>

        <input type="hidden"  name="id" value="{{$students->id}}" >
        <td>:<input type="text"  name="s_id" value="{{$students->s_id}}" placeholder="id">

         @error('id')
         <span class="btn btn-danger"> {{$message}}</span>
         @enderror</td>
    </tr>
    <tr>
        <td>
          <span>cgpa </span>
        </td>
        <td>:<input type="text"  name="cgpa" value="{{$students->cgpa}}" placeholder="cgpa">
          @error('cgpa')
          <span class="btn btn-danger"> {{$message}}</span>
          @enderror
        </td>
    </tr>
    <tr>
        <td>
          <span>Gender </span>
        </td>
        <td> :<input type="radio" name="gender" value="Male" <?php if($students->gender=='Male'){echo 'checked';} ?> >Male<input type="radio" name="gender" value="Female" <?php if($students->gender=='Female'){echo 'checked';} ?> >Female
          @error('gender')
          <span class="btn btn-danger"> {{$message}}</span>
          @enderror
        </td>
    </tr>
    <tr>
        <td>
          <span>Hobbies </span>
        </td>
        <td>:<input type="checkbox" value="Movies"
        <?php foreach ($hobbies as $value) {           // this way for array or when only using explode method
          if ($value=="Movies")
          {
            echo 'checked';
          }
        }
        ?>
        name="hobbies[]">Movies

{{-- comment-->this way for collection or when only using collect method for making collection. If we use collection then we neew to call contains() --}}

       <input type="checkbox" value="Music" <?php if($hobbies->contains('Music')){echo 'checked';} ?> name="hobbies[]">Music
          <input type="checkbox" value="Games" <?php if($hobbies->contains('Games')){echo 'checked';} ?> name="hobbies[]">Games
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
