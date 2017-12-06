@extends('layout')

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table ">
          <thead class="thead-light">
            <tr>
              <th scope="col">Correo</th>
              <th scope="col">Ayuda</th>
              <th scope="col">Fecha</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($voluntarios as $voluntario)
            <tr>
              <th scope="row">{{$voluntario->email}}</th>
              <td>{{$voluntario->ayuda}}</td>
              <td>{{$voluntario->created_at}}</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a class="btn btn-outline-success btn-sm" href="{{route('voluntarios.edit',$voluntario->id)}}" role="button">Editar</a>
                    <form style="display:inline" method="POST" action="{{route('voluntarios.destroy',$voluntario->id)}}">
                    {!!csrf_field()!!}
                    {!!method_field('DELETE')!!}
                    <button type="submit" class="btn btn-outline-danger btn-sm">Borrar</button>
                  </form>  
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@stop