@extends('layout')
@section('content')
<p id="name">Anik kumar Paul</p>
<a href="anikkumarpaul995@gmail.com" target="_blank"><p id="email">anikkumarpaul995@gmail.com</p></a>
</div>
<div class="left">
</div>
<div class="right">
       {{-- <img style="height:150px;width:130px;"  src="/css/pic.png" alt="propic"> --}}


       <p>
         <table border="1">
             <tr>
                 <th>id</th>
                 <th>name</th>
                 <th>dept</th>
             </tr>
             @foreach($myprofile as $p)
                  <tr>
                      <td>{{$p->id}}</td>
                      <td>{{$p->name}}</td>
                      <td>{{$p->dept}}</td>
                  </tr>
              @endforeach

         </table>
       </p>
       @endsection
