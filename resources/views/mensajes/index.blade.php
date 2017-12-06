@extends('layout')

@section('contenido')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table ">
          <thead class="thead-light">
            <tr>
              <th scope="col">Correo</th>
              <th scope="col">Asunto</th>
              <th scope="col">Mensaje</th>
              <th scope="col">Fecha</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mensajes as $mensaje)
            <tr>
              <th scope="row">{{$mensaje->email}}</th>
              <td>{{$mensaje->asunto}}</td>
              <td>{{$mensaje->mensaje}}</td>
              <td>{{$mensaje->created_at}}</td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <!--<a class="btn btn-outline-primary btn-sm" href="{{route('mensajes.show',$mensaje->id)}}" role="button">Mostrar</a>
                  <a class="btn btn-outline-success btn-sm" href="{{route('mensajes.edit',$mensaje->id)}}" role="button">Editar</a>-->
                  <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Mensaje</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Responder mensaje</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="POST" action={{route('send')}}>
                              {!!csrf_field()!!}
                              <div class="form-group">
                                  <label for="exampleFormControlInput1">Email</label>
                                  <input type="text" class="form-control" id="exampleFormControlInput1" name="to">
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Mensaje</label>
                                  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  <form style="display:inline" method="POST" action="{{route('mensajes.destroy',$mensaje->id)}}">
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