@extends('layout.base')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md7 mt-5">
            <!-- Mensaje flash-->
            @if (session('UsuarioModificado'))
            <div class="alert alert-success">
                {{session('UsuarioModificado')}}
                </div>
            @endif
            <!-- Validacion Errores-->
            @if($errors->any())
            <div class= "alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="card">
                <form action="{{route('edit', $usuario->id) }}" method="POST">
                    @csrf @method('PATCH')
                    <div class="card-header text-center">MODIFICAR Usuario</div>

                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-4">Nombre</label>
                            <input type="text" name="nombre" 
                            class="form-cotrol col-md-7" value="{{$usuario->nombre}}">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-4">email</label>
                            <input type="text" name="email" 
                             class="form-cotrol col-md-7" value="{{$usuario->email}}">
                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-success col-md-9 offset-2">MODIFICAR</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
<a class="btn btn-light btn-xs mt-5" href="{{ url('/')}}">&laquo volver</a>
</div>