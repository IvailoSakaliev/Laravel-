<!DOCTYPE html>
<html>
<head>
	<title>{{config('index.name', 'Ivailo Sakaliev') }}</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>
<body>
	<body id="page-top">

    <nav  id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand page-scroll" href="index">Ivailo Sakaliev
                   </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" >
                    <ul class="nav navbar-nav navbar-right" >
                        <li>
                            <a class="page-scroll" href="index">Home
                           </a> 
                        </li>
                        <li>
                            <a  href="product">Portfolio</a>
                        </li>
                        <li>
                            <a  href="contact">Contact</a>
                        </li>
                        <li>
                            <li>
                            @if (Auth::guest())
                                <a  href="login">Login</a>
                            @else
                                <a  href="home">{{ Auth::user()->name }}</a>
                            @endif
                        </li>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        </div>
            <!-- /.container-fluid -->
    </nav>
	<header>
		<div class="row" id="coverImageToAnetherPage">
			<div class="centerHeader">
                <div id="shadowBackground">
                    
                </div>
			</div>
		</div>
	</header>

    <div class="row">
        <div class="container" id="information">
        	@yield('main')
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    Copyright:<a href="">Ivailo Sakaliev</a>
                </div>
                <div class="col-md-6 ">
                    <div class="nav navbar-nav navbar-right">
                        <img src="https://columbiansdrumcorps.org/wp-content/uploads/2016/07/facebook.png" width="25px" height="25px">
                        <img src="http://forgedsoftware.com/icon-images/github-icon.png" width="25px" height="25px">

                        <img src="https://www.thebeerbug.com/images/footer/googlePlusWhite.png" width="25px" height="25px">
                    </div>           
                </div>
            </div>
        </div>
    </footer>
</body>
</html>