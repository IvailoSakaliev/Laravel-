@extends('layouts.viewProductLayot')

@section('main')
	<div class="container">
		<div class="row">
			@if(session('Messege'))
				<div class="alert alert-success" style="margin-top: 20px;">
					{{session('Messege')}}
				</div>
			@endif
			<div class="col-md-7">
				<img class="previewImage" src="../{{$product->imagePath}}" width="100%">
			</div>
			<div class="col-md-5" id="previewInfo">
				<h1>{{$product->title}}</h1>
				<h3>{{$product->description}}</h3>
				<button class="btn btn-primary">Sell</button>
			</div>
		</div>
		<h1>Comments:</h1>
		<div class="row">
			<div class="col-md-1">
				<img src="../images/Programmer.jpg" width="100%">
			</div>
			<div class="col-md-11">
				<form method="post" enctype="multipart/form-data">
				<textarea cols="145" rows="5" name="comment"></textarea>
				{{csrf_field()}}
				<input type="submit" name="submitComment" class="btn btn-primary" value="Enter">
				</form>
			</div>
		</div>
		<div style="text-align: center">
			<a href="comment/{{$product->id}}">See all comments</a>
		</div>
	</div>
@endsection