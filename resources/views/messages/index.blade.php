@extends('layouts.app')

@section('content')
<div class="container">
		<h1>Mensajes</h1>
		<a href="{{route('messages.create')}}">
			
		</a>
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
				@foreach($messages as &message)
				<tr>
					<td>{{$message->text}}</td>
					<td>{{$message->created_at}}</td>
					<td>
						<a href="{{route('messages.edit',$message->id)}}">
							<button type="button" class="btn btn-primary">Edtiar</button>
						</a>
						<a href="{{route('messages.delete',$message->id)}}">
							<button type="button" class="btn btn-danger">Borrar</button>
						</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection