@extends('layouts.index')

@section('main')
<div class="box">
	<a href="" name="headers" id="headerPage" style="display: none">News</a>
	<div class="row">
		<div class="col-md-4">
			<img class="futureBoxImage" src="images/home.png">
			<p>Научете повече за света на компютрите - нови модели, цени и др.</p>
			<a href="index" class="btn btn-info">News</a>
		</div>
		<div class="col-md-4">
			<img class="futureBoxImage" src="images/gallery.png">
			<p>Разгледайте актуалното ни портфоло включващо  всички настощи оферти  за вас</p>
			<a href="product" class="btn btn-info">Portfolio</a>
			
		</div>
		<div class="col-md-4">
			<img class="futureBoxImage" src="images/contact.png">
			<P>Свържете се с нас по всяко време на денонощието с въпроси свързани с определена стока или за новини отностно нашите промоции които да получавате на вашия е-майл</P>
			<a href="contact" class="btn btn-info">Contact US</a>
			
		</div>
		
	</div>
</div>
@endsection