@extends('layouts.commentPageLayout')

@section('main')
	<div class="container">
	<h1>Comemtnts to post:</h1>
	@if($comments != "")
		@foreach($comments as $c)
		<div class="row" style="margin-top: 20px;">
			<div class="col-md-2">
				<img src="../../images/Programmer.jpg" width="100%">
			</div>
			<div class="col-md-10" >
				<div class="commentsFrame">
					<p>{{$c->comment}}</p>
				</div>
			</div>
		</div>
		@endforeach
	@else
		<h3>This product haven't comments</h3>
	@endif
	</div>
@endsection