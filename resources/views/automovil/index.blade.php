@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
         <div class="col-md-12">
              <h1>AUTOS</h1>
             <a href="{{ route('automovil.create') }}">Registrar nuevo</a>
             <hr>
             @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
              @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('success') }}
            </div>
            @endif
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Precio</th>
                        <th>Precio con IVA</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($automoviles as $automovil)
                    <tr>
                        <td>{{ $automovil->marca }}</td>
                        <td>{{ $automovil->precio }}</td>
                        <td>{{ $automovil->precio*1.12 }}</td>
                        <td>
                            <a href="{{ route('automovil.edit',$automovil->id) }}">
                              <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <form method="POST" action="{{ route('automovil.destroy',$automovil->id) }}">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
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