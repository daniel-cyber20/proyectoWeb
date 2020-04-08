
@extends('layouts.app')

@section('content')

<div class="container">

<h3> <strong>Seccion para Crear</strong></h3>


    <form action="{{ url ('/cines')}}" method="POST" enctype="multipart/form-data">

    {{csrf_field()}}

    @include('cines.form',['Modo'=>'crear'])


    </form>

    </div>
    @endsection