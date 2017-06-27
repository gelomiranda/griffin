<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Cache-Control" content="no-store" />

    <title>Aki Funding Mock Up</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="{{ URL::asset('frontend/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('frontend/css/animate.css') }}" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="{{ URL::asset('frontend/css/style.css?').date('l jS \of F Y h:i:s A') }}" rel="stylesheet">
	<link href="{{ URL::asset('frontend/color/default.css') }}" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1>LOGO HERE</h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		      	<ul class="nav navbar-nav">
		        <li class="active"><a href="{{ url('') }}">Home</a></li>
		        <li><a href="{{ url('/index.php/how-it-works') }}">How it works</a></li>
				<li><a href="{{ url('/index.php/lenders') }}">Lenders</a></li>
				<li><a href="{{ url('/index.php/brokers') }}">Brokers</a></li>
				<li><a href="#contact">About us</a></li>
				<li><a href="#contact">Sign In</a></li>
				<li><button type="button" class="btn btn-lg btn-success">Get a loan</button>
			</li>
		      	</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	@yield('content')
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2017 - Test. All rights reserved. </p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="{{ URL::asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('frontend/js/jquery.easing.min.js') }}"></script>	
	<script src="{{ URL::asset('frontend/js/jquery.scrollTo.js') }}"></script>
	<script src="{{ URL::asset('frontend/js/wow.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('frontend/js/custom.js') }}"></script>

</body>

</html>
