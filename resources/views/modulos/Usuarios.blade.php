@extends('plantilla')

@section('contenido')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Gestor de usuarios</h1>
        </section>

        <section class="content">
            <div class="box">
                <div class="box-header">
                    <button class="btn btn-primary">Crear nuevo</button>
                </div>
                <br>
                <div class="box-body">
                    <table class="table-bordered table-hover table-striped dtUsers"></table>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Documento</th>
                                <th>Foto</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    @if ($user->documento == "")
                                        <td>No registrado</td>
                                    @else
                                        <td>{{ $user->documento }}</td>
                                    @endif

                                    @if ($user->foto == "")
                                        <td><img src="{{ url('storage/defecto.jpg') }}" width="50px"></td>
                                    @else
                                        <td><img src="{{ url('storage/'. $user-> foto) }}" width="50px"></td>
                                    @endif

                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->rol }}</td>
                                    <td>
                                        <button class="btn btn-success"><i class="fas fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </section>
    </div>

@endsection