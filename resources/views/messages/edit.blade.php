@extends('layouts.app')

@section('content')
<div class="container">
     <div class="card">
         <div class="col-md-12">
              <h1>Nuevo Mensaje</h1>
          
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" method="POST" action="{{ route('messages.update', $message->id) }}">
                    @csrf()
                    <input type="hidden" name="_method" value="PUT"/>
                <div class="form-group">
                    <label class="col-md-2">Texto</label>
                    <div class="col-md-10">
                        <input type="text" name="texto" value="{{ $message->text}}">
                    </div>
                </div>
                <dir class="form-group">
                    <label class="col-md-2">
                        Destinatario
                    </label>
                    <div class="col-md-10">
                        <select name="to_user_id" class="form-control">
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}" {{ ($user->id == $message->to_user_id) ? 'selected' : ''}}> {{ $user->email }}</option>
                            @endforeach
                        </select>
                    </div>
                </dir>
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