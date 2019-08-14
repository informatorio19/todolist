@extends('main')

@section('contenido')

    <div class="card">
        <div class="card-body">
            <div class="card-text">
            <form action="{{route('empleados.store')}}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>

                    <div class="form-group">
                        <select name="tareas[]" id="" class="form-control" multiple>
                            @foreach ($tareas as $tarea)
                        <option value="{{$tarea->id}}">{{$tarea->nombre}}</option>
                            @endforeach
                        </select>

                    </div>

                    <button class="btn btn-success" type="submit">Guardar</button>

                </form>
            </div>
        </div>
    </div>

@endsection
