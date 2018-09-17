@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
         <div class="col-md-12">
              <h1>Editar mensaje</h1>
          
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{ route('messages.update',$message->id) }}">
                    @csrf()
                    <input type="hidden" name="_method" value="PUT"/>
                <div class="form-group">
                    <label class="col-md-2">Texto</label>
                    <div class="col-md-10">
                        <input type="text" name="texto" value="{{$message->text}}">
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