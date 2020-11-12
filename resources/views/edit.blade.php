@extends('plantilla')
@section('seccionbody')

<div class="jumbotron mx-auto" style="width:50%;">
<h3>Registrar:</h3><br>
<form action="{{ route('ref.update',$dato->id) }}" method="post">
    @csrf
    @method('PUT')
        <input type="hidden" name="id" value="{{$dato->id}}">
        <b>Nombre:</b><br><br>
        <input type="text" name="Nombre" value="{{$dato->Nombre }}" size="25"> <br><br>
        <b>Descripcion:</b><br><br>
        <input type="text" name="Descripcion" size="25" value="{{$dato->Descripcion }}"> <br><br>
        <b>Numero de piezas:</b><br><br>
        <input type="text" name="Npiezas" size="2" value="{{$dato->npiezas }}"> <br><br>
        <b>Costo por pieza:</b><br><br>
        <input type="number" name="Cpieza" size="6" value="{{$dato->costoporpieza }}"> <br><br>
        
        <button type="submit" class="btn btn-outline-primary">Actualizar</button>
</form>
</div>

@endsection