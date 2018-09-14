@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="col-md-12">
            <h1>Mensajes</h1>
            <a href="{{route('messages.create')}}">Nuevo</a>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Texto</th>
                            <th>Fecha</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PRUEBA</td>
                            <td>5/10/2018</td>
                            <td>
                                <a>
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>
                                <a>
                                    <button type="button" class="btn btn-danger">Borrar</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        
    </div>
</div>
@endsection