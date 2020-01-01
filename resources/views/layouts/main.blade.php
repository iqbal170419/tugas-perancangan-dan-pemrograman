<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The aqual Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
 <script type="text/javascript"  src="js/menu.js"></script>
<!-- start top_js_button -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	 	<!---strat-slider---->	
	    <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
		<!---//strat-slider---->
		
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div id="content">
      <header id="topnav">
        <nav>
        		 <ul>
					<li class="active"><a href="#home" class="scroll">Home</a></li>
					<li><a href="#about" class="scroll">About</a></li>
					<li><a href="#ourteam" class="scroll">our team</a></li>
					<li><a href="#portfolio" class="scroll">portfolio</a></li>
					<li><a href="#service" class="scroll">Services</a></li>
					<li><a href="#contact" class="scroll">Contact</a></li>
					<div class="clear"> </div>
				</ul>
        </nav>
         <h1><a href="index.html"><img src="images/logo.png"></a></h1>
        <a href="#" id="navbtn">Nav Menu</a>
        <div class="clear"> </div>
      </header><!-- @end #topnav -->
    </div>
</div>
</div>
<!-- start slider -->
<div class="slider_bg" id="home">
<div class="wrap">
	<div class="slider">
				<!---start-da-slider----->
				<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Welcome to our website</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<a href="#about" class="da-link">Find out More</a>
				</div>
				<div class="da-slide">
					<h2>Clean & Flat Design</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<a href="#about" class="da-link">Find out More</a>
				</div>
				<div class="da-slide">
					<h2>Clean & Flat Design</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<a href="#about" class="da-link">Find out More</a>
				</div>
				<div class="da-slide">
					<h2>Welcome to our website</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<a href="#about" class="da-link">Find out More</a>
				</div>			
			</div>
 			<!---//End-da-slider----->
 	</div>
</div>
</div>
@yield('about')
<!-------start-our team-------->
@yield('start')
<!-------end-our team-------->
<!--------portfolio----------->
<!--start gallery-->

@yield('galeri')
<!--End-gallery-->
<!--------end-portfolio----------->
@yield('service')
<!---------end-services----------->
@yield('contact')
<div class="footer">
		<div class="footer_top">
			<div class="wrap">
		<div class="social-icons">
			 <ul>
			      <li><a href="#" target="_blank"></a></li>
				  <li><a href="#" target="_blank"></a></li>
			      <li><a href="#" target="_blank"></a></li>
				  <li><a href="#" target="_blank"></a></li>
				  <li><a href="#" target="_blank"></a></li>
				  <div class="clear"> </div>
			</ul>
		</div>
		<div class="footer_nav">
			<ul>
				<li class="active"><a href="#home" class="scroll">Home</a></li>
					<li><a href="#about" class="scroll" >About</a></li>
					<li><a href="#ourteam" class="scroll">our team</a></li>
					<li><a href="#portfolio" class="scroll">portfolio</a></li>
					<li><a href="#service" class="scroll">Services</a></li>
					<li><a href="#contact" class="scroll">Contact</a></li>
				<div class="clear"> </div>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
</div>
<p class="copy_right">&#169; 2013 Template by<a href="http://w3layouts.com" target="_blank">&nbsp;w3layouts</a> </p>
</body>
</html>		
		