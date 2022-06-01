@extends('layout.base')

<h1>Saludos desde la vista de listar</h1>

<div class="container mt-5>
    <div class="row justify-content-center">
        <div class ="col-md-10">
            <h2 class ="text-center mb-5">Usuarios admin</h2>
            <a class="btn btn-success mb-4" href="{{ url('/form')}}">Agregar Usuario</a>

            <table class="table table-border table striped text-center">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->nombre}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

                {{$users->links() }}
        </div>

    </div>

</div>