@extends('layout.base')

<h1>Listado</h1>

<div class="container mt-5>
    <div class="row justify-content-center">
        <div class ="col-md-10">
            <h2 class ="text-center mb-5">Usuarios admin</h2>
            <a class="btn btn-success mb-4" href="{{ url('/form')}}">Agregar Usuario</a>
            <!-- Mensaje flash-->
            @if(session('UsuarioEliminado'))
            <div class="alert alert-success">
            {{session('UsuarioEliminado')}}
            </div>
            @endif


            <table class="table table-border table striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->nombre}}</td>
                        <td>{{$user->email}}</td>
                            <td>
                             <form action="{{ route('delete', $user->id)}}" method="POST">
                                 @csrf @method('DELETE')
                                 <button type="submit" onclick="return confirm('¿borrar?');" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                             </form>
                            </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

                {{$users->links() }}
        </div>

    </div>

</div>