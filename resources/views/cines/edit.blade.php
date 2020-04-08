@extends('layouts.app')

@section('content')

<div class="container">



<h3> <strong>Seccion para editar</strong></h3>

<form action="{{ url('/cines/'.$cine->id) }}"  method="POST" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('cines.form',['Modo'=>'editar'])



</form>

</div>      
@endsection 