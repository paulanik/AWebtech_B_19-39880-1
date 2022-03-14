@extends('layout')
@section('content')
<?php
?>
@php
    $name = htmlspecialchars("<script>alert(1)</script><h1 style='color:red'>Akkas Ali</h1>");
    $name2 = "<script>alert(1)</script><h1 style='color:red'>Akkas Ali</h1>";
@endphp
<h1>Create</h1>
<div><?php echo $name;?></div>
<div>{{$name2}}</div>
@endsection
