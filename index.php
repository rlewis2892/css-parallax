<!DOCTYPE html>
<html>
	<head lang="en">
		<!-- The 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- FontAwesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<!-- Parallax CSS -->
		<link rel="stylesheet" href="css/parallax.css" type="text/css">

		<!-- Custom CSS - Theme only -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery (required for Bootstap's JS plugins) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- custom jquery -->
		<script src="js/custom.js"></script>

		<title>CSS Driven Parallax</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<header>
				<nav class="navbar navbar-inverse navbar-fixed-top">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">CSS Parallax</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="main-nav">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
								<li><a href="#">Link</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container -->
				</nav>

				<!-- begin welcome area -->
				<div class="container">
					<div class="col-md-6 col-md-offset-6">
						<div class="jumbotron">
							<h1>Don't forget to fed teh kitty.</h1>
						</div>
					</div>
				</div>
			</header>

			<div class="parallax">
				<section id="about" class="parallax--layer">
					<div class="container">
						About US
					</div>
				</section>

				<section id="skills" class="parallax--layer">
					<div class="container">
						Our Skills
					</div>
				</section>

				<section id="contact" class="parallax--layer">
					<div class="container">
						Contact US
					</div>
				</section>
			</div><!--/.parallax-->
		</div><!--/.sfooter-content-->

		<footer class="parallax--layer">
			<div class="container">
				footer
			</div>
		</footer>
	</body>
</html>