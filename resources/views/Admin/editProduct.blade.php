@extends('layouts.deleteDashboard')

@section('main')

	<div class="row">
		<form method="post" enctype="multipart/form-data">
			<h3 style="font-weight: bold">Edit product</h3>
			@if(session('Messege'))
				<div class="alert alert-success">
					{{session('Messege')}}
				</div>
			@endif

			<div class="input-group">
			<label>Title</label></br>
			<input type="text" class="form-control"  aria-describedby="basic-addon1" name="title" required value="{{$product->title}}">
			</div>

			<div class="input-group">
			<label>Price</label></br>	
			<input type="number" class="form-control"  aria-describedby="basic-addon1" name="price" required value="{{$product->price}}" >
			</div>

			<div class="input-group">
			<label>Description</label></br>
			<textarea cols="53" rows="10" name="desc" required >{{$product->description}}</textarea>
			</div>

			

			<div class="form-group">
				<label>Image</label>
		    	<input  type="file" name="photo" required="required"  value="{{$product->photo}}" />
		    </div>
				
			{{csrf_field()}}
   			<input type="submit" name="submit" class="btn btn-warning" value="Edit">
  



		</form>
	</div>
@endsection