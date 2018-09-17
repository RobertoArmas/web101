@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
         <div class="col-md-12">
              <h1>Mensajes</h1>
             <a href="{{ route('messages.create') }}">Nuevo</a>
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
                    @foreach($messages as $message)
                    <tr>
                        <td>{{ $message->text }}</td>
                        <td>{{ $message->created_at }}</td>
                        <td>
                            <a href="{{ route('messages.edit',$message->id) }}">
                              <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            
                            <!-- Crear un formulario POST -->
                            <form method="POST" action="{{ route('messages.destroy',$message->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE"/> 
                              <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
         </div>
        
    
</div>
@endsection