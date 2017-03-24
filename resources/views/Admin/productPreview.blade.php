@extends('layouts.dashboard')

@section('main')
	<h2>Products</h2>
	<div class="container">
		<div class="row">
			@foreach($products as $p)
				<div class="col-md-3">
					<img src="{{$p->imagePath}}" width="100%" height="150px">
					<h3>{{$p->title}}</h3>
					<P>{{$p->description}}</P>
					<h4 style="color: red; font-weight: bold;text-align: right">{{$p->price}} лв.</h4>

					@if (Request::is('edit'))
					
					    <a href="editProduct/{{$p->id}}" class="btn btn-info" style="text-align: center;width: 100px;float: right">Edit</a>
					
					@endif
					@if (Request::is('delete'))
					
					   <a href="deleteProduct/{{$p->id}}" class="btn btn-info" style="text-align: center;width: 100px;float: right">Delete</a>
					
					@endif
				</div>

			@endforeach
			
		</div>
	</div>
	
@endsection