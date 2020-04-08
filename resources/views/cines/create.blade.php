
@extends('layouts.app')

@section('content')

<div class="container">

    seccion para crear


    <form action="{{ url ('/cines')}}" method="POST" enctype="multipart/form-data">

    {{csrf_field()}}

    @include('cines.form',['Modo'=>'crear'])


    </form>

    </div>
    @endsection