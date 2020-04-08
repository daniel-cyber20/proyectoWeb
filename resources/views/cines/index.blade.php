
@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('mensaje'))

<div class="alert alert-success" role="alert">
{{Session::get('mensaje')  }}
@endif 
<br/>   
<a href="{{url ('cines/create')}}">Agregar Nuevo</a>

<table class="table table-light">
    <thead class="thead-light">

 <tr>
    <th>#</th>
    <th>Foto</th>

    <th>Nombre</th>
 
    <th>Fecha de estreno</th>
    <th>Rainting</th>
    <th>Trailer</th>
    <th>Acciones</th>

 </tr>
 </thead>

    <tbody>

    @foreach($cines as $cine)

    <tr>
        <td>{{$loop -> iteration}}</td>
        <td>
            <img src="  {{ asset('storage').'/'.$cine -> Foto }}" width="200" height="">
      
    
    </td>
        <td>{{ $cine->Nombre }}</td>
        <td>{{ $cine->FechaEstreno }}</td>

        <td>{{ $cine->Rating }}</td>
       <td>{{ $cine->Trailer }}</td>

        <td>
            <a href="{{ url('/cines/'.$cine->id.'/edit') }}" class="btn btn-success">
            Editar</a>
            <br/>
            
        
        
        | 

        <form method="POST" action="{{ url('/cines/'.$cine->id) }}">
        {{csrf_field() }}

        {{method_field('DELETE')}}
        <button type="submit" onclick="return confirm('Borrar?');">  Borrar  </button>


    </form>



        </td>
    </tr>
 @endforeach
 </tbody>


</table>

{{$cines->links()}}

</div>      

@endsection
