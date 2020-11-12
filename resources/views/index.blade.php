@extends('plantilla')
@section('seccionbody')

<div class="jumbotron mx-auto" style="width:50%;">
<h3>Registrar:</h3><br>
<form action="/ref" method="post">
    @csrf
        <b>Nombre:</b><br><br>
        <input type="text" name="Nombre" size="25" required> <br><br>
        <b>Descripcion:</b><br><br>
        <input type="text" name="Descripcion" size="25" required> <br><br>
        <b>Numero de piezas:</b><br><br>
        <input type="text" name="Npiezas" size="2" required> <br><br>
        <b>Costo por pieza:</b><br><br>
        <input type="number" name="Cpieza" size="6" required> <br><br>
        
        <button type="submit" class="btn btn-outline-primary">Registrar</button>
</form>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Numero de piezas</th>
      <th scope="col">Costo por pieza</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($datos as $d)
        <tr>
          <th> {{$d->id}} </th>
          <td> {{$d->Nombre}} </td>
          <td> {{$d->Descripcion}} </td>
          <td> {{$d->npiezas}} </td>
          <td> {{$d->costoporpieza}} </td>
          <td style="display:grid;grid-auto-flow:column;justify-content:center;grid-gap:5px;">
          
          <a href="{{ route('ref.edit',$d->id) }}"> 
          <button class="btn btn-warning">
              <i class="fas fa-edit"></i>
          </button>
          </a> 
          
          <form action="{{ route('ref.destroy',$d->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Borrar" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                       
          </form>
          
          </td>
        </tr>
    @endforeach
  </tbody>
</table>

@endsection