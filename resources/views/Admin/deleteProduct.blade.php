@extends('layouts.deleteDashboard')

@section('main')
	<form method="post" enctype="multipart/form-data" >
	@if(session('message'))
		<div class="alert alert-success">
			{{session('message')}}
		</div>
	@endif
	<P>Do you want to delete this product!</P>
	{{csrf_field()}}
		<input type="submit" name="submit" class="btn btn-danger" value="Delete">
	</form>
@endsection
