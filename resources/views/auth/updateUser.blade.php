@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizar información</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.update') }}">
                        {{ csrf_field() }}
                        

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                           

                            <div class="col-md-6">
                                <input id="id" type="hidden" class="form-control" name="id" value="{{$user->id}}" required autofocus>

                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="{{$user->password}}" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tipo-usuario" class="col-md-4 control-label">Tipo de usuario</label>

                            <div class="col-md-6">
                               <select name="tipo" id="tipo">
                                    @if ($user->roles()->first()->name == 'admin')
                                        <option value="1" selected>Administrador</option>
                                        <option value="2">Usuario</option>
                                    @else
                                        <option value="1">Administrador</option>
                                        <option value="2" selected>Usuario</option>
                                    @endif
                                   
                               </select>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar datos
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
