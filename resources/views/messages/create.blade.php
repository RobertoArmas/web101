@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
         <div class="col-md-12">
              <h1>Nuevo Mensaje</h1>
          
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{ route('messages.store') }}">
                    @csrf()
                <div class="form-group">
                    <label class="col-md-2">Texto</label>
                    <div class="col-md-10">
                        <input type="text" name="texto">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2">Destinatario</label>
                    <div class="col-md-10">
                        <select type="text" name="to_user_id" class="form-control">
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->email}}</option>
                            @endforeach
                        </select>
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