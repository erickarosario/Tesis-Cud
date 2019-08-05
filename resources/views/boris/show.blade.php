

@extends('layouts.app')
@section('title','Trainer')
@section('content')<br>
<a href="../boris" class="btn btn-primary">volver</a> 
 		
 		<img style='height:300px; width: 300px; background-color: #AF4531; margin:10px; text-align:center;' class="card-img-top rounded-circle mx-auto d-block" src="/img/{{$boris->avatar}}">
 		<div class="text-center">
 			<h5 class="card-title">{{$boris->name}}</h5>
 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, suscipit pariatur culpa fugiat cupiditate vero quae veniam. Consequatur necessitatibus, adipisci voluptas, modi sunt eveniet repellat aliquid aperiam sed nam vero.
 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga natus atque amet quo repellendus, dolore, dolorum voluptas illo iusto veniam reprehenderit distinctio optio omnis porro. Illum voluptas fuga accusantium ut!
 				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum non iusto perspiciatis quos nam distinctio repudiandae aspernatur quod atque? Atque, assumenda ea dolores mollitia ab commodi eveniet accusantium porro ipsa?
 		</div>
 		


@endsection
 