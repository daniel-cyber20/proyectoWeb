@extends('layouts.app')

@section('content')

<div class="container">



seccion para editar

<form action="{{ url('/cines/'.$cine->id) }}"  method="POST" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('cines.form',['Modo'=>'editar'])



</form>

</div>      
@endsection 