@extends('layouts.app')

@section('content')
@if(Auth::user()->hasRole('admin'))
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="pull-left"><h3>Lista Usuarios</h3></div>
                <div class="pull-right">
                  <div class="btn-group">
                    <a href="{{ route('register') }}"  class="btn btn-info"  >Añadir Usuario</a>
                  </div>
                </div>
                <div class="table-container">
                  <table id="mytable" class="table table-bordred table-striped">
                   <thead>
                    <th>Id</th>
                     <th>Nombre</th>
                     <th>Correo</th>   
                     <th>Tipo</th>   
                     <th>Editar</th>
                     <th>Eliminar</th>
                   </thead>
                   <tbody>
                   
                    @if($usuarios->count())  
                      @foreach($usuarios as $usuario)  
                        <tr>
                          <td>{{$usuario->id}}</td>
                          <td>{{$usuario->name}}</td>
                          <td>{{$usuario->email}}</td>
                          <td>
                            @if ($usuario->roles()->first()->name == 'admin')
                              <span class="label label-success">{{ $usuario->roles()->first()->name }}</span>
                            @else
                              <span class="label label-default">{{ $usuario->roles()->first()->name }}</span>
                            @endif
                          </td>
                          <td>
                            <a class="btn btn-primary" href="{{ route('users.edit',$usuario->id) }}" >
                              <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                          </td>
                          <td>
                            <a href="{{ route('users.destroy',$usuario->id) }}" class="btn btn-danger" onclick="return confirm('Seguro que deseas deshabilitar al usuario?')">
                                <span class="glyphicon glyphicon-remove-sign"></span>
                            </a>
                          </td>
                        </tr>
                      @endforeach 
                     @else
                      <tr>
                        <td colspan="8">No hay registro !!</td>
                      </tr>
                    @endif 
                  </tbody>
      
                </table>
              </div>
            </div>
            {{ $usuarios->links() }}
           
          </div>
    </div>@endif
</div>
@endsection
