@extends('layouts.anotherPage')

@section('main')
<form method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<h1 id="headerPage">Contact us</h1>
	<label for="email">E-mail</label>
	<input type="text" class="form-control" name="email" id="email" >

	<label for="sub">Subject</label>
	<input type="text" class="form-control" name="sub" id="fname">

	<label for="mess">Messege</label></br>
	<textarea class="form-controlrol" id="mess" cols="100" rows="20" name="messege"></textarea></br>
	
 	{{csrf_field()}}
	<input type="submit" class="btn btn-info" name="submit" value="Send">
</form>


@endsection
