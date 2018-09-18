@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
        <div class="col-md-12">
            <h1>Editar Auto</h1>
          
         <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{ route('automovil.update',$automovil) }}">
                    @csrf()
                    <input type="hidden" name ="_method" value="PUT"/>
                <div class="form-group">
                    <label class="col-md-2">Marca</label>
                    <div class="col-md-10">
                        <input type="text" name="marca" value="{{$automovil->marca}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Precio</label>
                    <div class="col-md-10">
                        <input type="number" name="precio" value="{{$automovil->precio}}"/>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
            </div>
            
        </div>
    </div>
</div>
        
    
</div>

@endsection