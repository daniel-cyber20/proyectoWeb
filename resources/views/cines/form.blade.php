
<br/>
<label for "nombre">{{'Nombre:'}}</label>
<input type="text" name="Nombre" id="Nombre" 

value="{{isset($cine->Nombre)?$cine->Nombre:''}}">
<br/>

<label for "foto">{{'Foto:'}}</label>
@if(isset($cine ->Foto))
<br/>
<img src="  {{ asset('storage').'/'.$cine -> Foto }}" width="200" height="" class="">
<br/>
@endif

<input type="file" name="Foto" id="Foto" value="">

<br/>

<label for "trailer">{{'Trailer:'}}</label>
<input type="text" name="Trailer" id="Trailer" value="{{isset($cine->Trailer)?$cine->Trailer:''}}">
<br/>

<label for "rating">{{'Rating:'}}</label>
<input type="text" name="Rating" id="Rating"value="{{isset($cine->Rating)?$cine->Rating:''}}">
<br/>

<label for "fechaEstreno">{{'Fecha:'}}</label>
<input type="text" name="FechaEstreno" id="FechaEstreno" value="{{isset($cine->FechaEstreno)?$cine->FechaEstreno:''}}">
<br/>
<input type="submit" value  ="{{$Modo=='crear' ? 'agregar empleado':'Modificar empleado'}}"
/>



<a href="{{url ('cines')}}">Regresar</a>
