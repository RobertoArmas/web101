@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
         <div class="col-md-12">
              <h1>Nuevo Auto</h1>
          
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{ route('auto.store') }}">
                    @csrf()
                <div class="form-group">
                    <label class="col-md-2">Marca</label>
                    <div class="col-md-10">
                        <input type="text" name="marca">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Precio</label>
                    <div class="col-md-10">
                        <input type="number" name="precio">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
            </div>
            
        </div>
    </div>
</div>
        
    
</div>
@endsection