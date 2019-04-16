<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>RapsonTech</title>
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!--theme-style-->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Prevailing Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script type="text/javascript" src="{{asset('assets/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/easing.js')}}"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>

<script type="text/javascript" src="{{asset('assets/js/numscroller-1.0.js')}}"></script>
<link href="{{asset('assets/css/index.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
<!--header-->
<div class="header" id="header">
	<div class="head" >
				<div class="nav-top">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						 <div class="navbar-brand logo ">
							<h1 class="animated wow pulse" data-wow-delay=".5s">
							<a href="/">RapsonTech</a></h1>
						</div>
<div class="clearfix"></div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil links" id="bs-example-navbar-collapse-1">
					<div class="fill">
					<ul class="nav navbar-nav ">
					<li ><a href="index.html" class="scroll active" data-hover="Home">Home</a> </li>
						<li ><a href="#services" class="scroll" data-hover="About">Services</a> </li>
						<li><a href="#success" class="scroll" data-hover="Gallery">Success</a></li>
						<li><a href="#testimonials" class="scroll" data-hover="Gallery">About</a></li>
						<li><a href="#gallery" class="scroll" data-hover="Gallery">Portfolio</a></li>
						<li><a href="#team" class="scroll" data-hover="Codes">Team </a></li>
						<li><a href="#contact" class="scroll" data-hover="Contact">Contact</a></li>

						@guest

						@else
						<li><a href="#contact" class="scroll" data-hover="Contact"> {{ Auth::user()->name }}</a></li>
						<li><a href="#contact" class="scroll" data-hover="Contact">
						<a href="{{ route('logout') }}"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						{{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
						</form>
						@endguest
						</a></li>



					  </ul>
					  <div class="clearfix"></div>
					</div>
					</div><!-- /.navbar-collapse -->
				</div>

	
<!-- start search-->
	
				<div class="search-box">
				   <div id="sb-search" class="sb-search">
					  <form>
						 <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
						 <input class="sb-search-submit" type="submit" value="">
						 <span class="sb-icon-search"> </span>
					</form>
					</div>
				 </div>
				 <!----search-scripts---->
				 <script src="{{asset('assets/js/classie.js')}}"></script>
				 <script src="{{asset('assets/js/uisearch.js')}}"></script>
				   <script>
					 new UISearch( document.getElementById( 'sb-search' ) );
				   </script>
					<!----//search-scripts---->


			  <div class="clearfix"></div>	
		</div>
	
</div>
<div class="intro-header">

  @if (count($errors))
            	<div class="alert alert-danger">
				<button class="close" data-dismiss="alert">×</button>
                  @foreach ($errors->all() as $error)
                        <p > {{ $error }}</p>
                  @endforeach
              </div>
              @elseif(Session::has('message'))
            <div class="alert alert-success">
				<button class="close" data-dismiss="alert">×</button>
                  <p><?php echo Session::get('message'); ?></p>
          </div>
              @endif 
    <!-- Header -->

        <!-- Main content -->
  
        @yield('content')
       
        <!-- Main content -->

	<!--footer-->
	<div class="copy">
		<p class="footer-grid" >© {{ date('Y') }} Rapsontech. All rights reserved | Design by  <a href="http://rapsontech.com/" target="_blank">RapsonTech</a> </p>
		<ul class="captn2 footer-sc">
							<li><a href="https://facebook.com/rapsontech" class="icon1" target="_blank"></a></li>
							<li><a href="#" class="icon2"></a></li>
							<li><a href="#" class="icon3"></a></li>
								
						</div>
	</div>
		 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	 </div>

<!-- for bootstrap working -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- //for bootstrap working -->
</body>
</html>