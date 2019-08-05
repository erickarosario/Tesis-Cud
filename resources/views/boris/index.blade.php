@extends('layouts.app')
@section('title','Trainer')
@section('content')<br>
<a href="boris/create" class="btn btn-primary">volver</a> 
 		<div class="row">
			@foreach($boris as $boris )
				<div class="col-sm">
					<div class="card text-center" style="width:18rem; margin-top: 10px;">
						<img style='height:100px; width: 100px; background-color: #AF4531; margin:10px; text-align:center;' class="card-img-top rounded-circle mx-auto d-block" src="img/{{$boris->avatar}}">
						<div class="card-body">
							<h5 class="card-title">{{$boris->name}}</h5>
							<p class="card-text">{{$boris->comentario}}</p>
							<a href="/boris/{{$boris->id}}" class="btn btn-primary">Ver mas</a>
						</div>
			
					</div>
				</div>
			@endforeach
		</div>
		


@endsection
 