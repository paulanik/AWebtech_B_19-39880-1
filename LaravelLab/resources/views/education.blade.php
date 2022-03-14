@extends('layout')
@section('content')
<p id="name">Anik Kumar Paul</p>
<a href="anikkumarpaul995@gmail.com" target="_blank"><p id="email">anikkumarpaul995@gmail.com</p></a>
</div>
<div class="left">
</div>
<div class="right">
       {{-- <img style="height:150px;width:130px;"  src="/css/pic.png" alt="propic"> --}}


       <p>
         <table border="1">
             <tr>

               <th>year</th>
               <th>degree</th>
              <th>result</th>

             </tr>
             @foreach($education as $p)
                  <tr>
                      <td>{{$p->year}}</td>
                      <td>{{$p->degree}}</td>
                      <td>{{$p->grade}}</td>

                  </tr>
              @endforeach

         </table>
       </p>
       @endsection
