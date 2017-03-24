@extends('layouts.anotherPage')

@section('main')
	<h2>Products</h2>
	<div class="container">
		<div class="row" id="serchBox">
		<form method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="col-md-3">
				<label>Name</label>
				<input type="text" class="form-control" name="name">
			</div>
			<div class="col-md-3">
				<label>Price to</label>
				<input type="text" name="price" class="form-control">
			</div>
			<div class="col-md-3">
				<input type="submit" name="Search" class="btn btn-primary"> 
			</div>
		</form>
			
		</div>
		<hr>
		<div class="row">

			@foreach($products as $p)
				<div class="col-md-3">
					<img src="{{$p->imagePath}}" width="100%" height="150px">
					<h3>{{$p->title}}</h3>
					<p>{{$p->description}}</p>
					<h4 style="color: red; font-weight: bold;text-align: right">{{$p->price}} лв.</h4>
					<a href="viewProduct/{{$p->id}}" class="btn btn-info" style="text-align: center;width: 100px;float: right">Sell</a>
				</div>
			@endforeach
			
		</div>
		<div class="row">
			{{$products->links()}}
		</div>
	</div>
@endsection