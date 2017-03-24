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

	<link rel="stylesheet" type="text/css" href="{{asset('css/dashboardStyle.css')}}">
</head>
<body>
	<body id="page-top">
    <div class="row"  >
        <div class="col-md-2" style="border-right:1px solid black;height:630px;">
            <ul class="dash-menu">
                <li><a href="create">
                    <img class="dashboardImg" src="images/dashboard/add.png">Add products</a></li>
                <li><a href="edit"><img class="dashboardImg" src="images/dashboard/edit.png">Edit products</a></li>
                <li><a href="delete"><img class="dashboardImg" src="images/dashboard/del.png">Delete products</a></li>
    
                <hr style="color: white">
                <li><a href="home"><img class="dashboardImg" src="images/dashboard/exit.png">Exit</a></li>
            </ul>
        </div>
        <div class="col-md-9">
        <a href="index" class="btn btn-primary" id="home">Go to site</a>
            @yield('main')
        </div>
	</div>
    

   
    	
    	<!-- <div class="row">
        <footer>
            <div class="container">
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
            </footer>
    	</div> -->
    
</body>
</html>