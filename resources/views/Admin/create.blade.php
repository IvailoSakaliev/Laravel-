@extends('layouts.dashboard')

@section('main')

	<div class="row">
		<form method="post" enctype="multipart/form-data">
			<h3 style="font-weight: bold">Add product</h3>
			@if(session('Messege'))
				<div class="alert alert-success">
					{{session('Messege')}}
				</div>
			@endif
			<div class="input-group">
			<label>Title</label></br>
			<input type="text" class="form-control"  aria-describedby="basic-addon1" name="title" required>
			</div>

			<div class="input-group">
			<label>Price</label></br>	
			<input type="number" class="form-control"  aria-describedby="basic-addon1" name="price" required>
			</div>

			<div class="input-group">
			<label>Description</label></br>
			<textarea cols="53" rows="10" name="desc" required></textarea>
			</div>

			

			<div class="form-group">
				<label>Image</label>
		    	<input type="file" name="photo" required="required" />
		    </div>
				
			{{csrf_field()}}
   			<button class="btn btn-success">Add</button>
  


   			
		</form>
	</div>
@endsection