@extends('main')

@section('contenido')

    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>Lista de Empleados</h3>
            <a href="{{route('empleados.create')}}" class="btn btn-success">Nuevo Empleado</a>
            </div>

            <div class="card-text">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($empleados as $empleado)
                            <tr>
                            <td>{{$empleado->id}}</td>
                            <td>{{$empleado->nombre}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
