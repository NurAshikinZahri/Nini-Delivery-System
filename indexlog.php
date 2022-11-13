<?php
session_start();
if(!isset($_SESSION["login"]))
    header("location: index.php");

include('config.php');

  if(isset($_SESSION['cart_product'])){
       $total_cart = count($_SESSION['cart_product']);
} else {
   $total_cart = 0;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Nini Cupcake</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header -->
<div class="header" id="home">
	<div class="container">
		<ul>
		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> 
        <?php
               if($_SESSION["capaian"] == 1) { ?> 
               Welcome, Hi (<?= $_SESSION['login']?>) 
               <?php } ?>
             
        <?php
             if($_SESSION["capaian"] == 0) { ?>
		    Welcome, Hi (<?= $_SESSION['login']?>)</a></li>

		<?php } ?>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            <a href="index.php">LOGOUT (<?= $_SESSION['login']?>)
			</a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 019-4504959</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i>ninicupcake@gmail.com</a></li>
		</ul>
	</div>
</div>

<!-- //header -->
<!-- //search -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			
		</div>

		<!-- //logo -->
			<div class="col-md-4 logo_agile">
				<h1><a href="indexlog.php"><span>Nini</span>Cupcake<i class="" aria-hidden="true"></i></a></h1>
			</div>

        <!-- header-bot -->
		<div class="col-md-4 agileits-social top_content">
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
                
<!-- //menu -->
<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav menu__list">
<li class="active menu__item menu__item--current"><a class="menu__link" href="indexlog.php">Home <span class="sr-only">(current)</span></a></li>
				
    <?php
    if($_SESSION["capaian"] == 1) { ?>
     <li class=" menu__item"><a class="menu__link" href="add_product.php">Add Products</a></li>
     <li class=" menu__item"><a class="menu__link" href="user_data.php">User Data</a></li>
	 <li class=" menu__item"><a class="menu__link" href="view_product.php">Products</a></li>
	 <li class=" menu__item"><a class="menu__link" href="sell.php">Order</a></li>			
    <?php } ?> 
               
    <?php
    if($_SESSION["capaian"] == 0) { ?>
		<li class=" menu__item"><a class="menu__link" href="about.php">About</a></li>
		<li class="dropdown menu__item">
		<a href="simple_b.php" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" 
		aria-haspopup="true" aria-expanded="false">Nini Cupcake<span class="caret"></span></a>
		<ul class="dropdown-menu multi-column columns-3">
		<div class="agile_inner_drop_nav_info">
		<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
		<a href="all_b.php"><img src="images/images/bakeri.jpg" alt=" "/></a>
		</div>
									
		<div class="col-sm-3 multi-gd-img">
		<ul class="multi-column-dropdown">
		<li><a href="wedding.php">Wedding Cake</a></li>
		<li><a href="birthday.php">Birthday Cake</a></li>
		<li><a href="cupcake.php">Cupcake</a></li>
		<li><a href="drinks.php">Drinks</a></li>
		
		</ul>
		</div>
									
			<div class="clearfix"></div>
			</div>
		    </ul>
	        </li>
			</li>
			
		<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
			</ul>
		    </div>
			</div>
			<?php } ?> 

			</nav>	
		   </div>

<!-- //cart -->
<div class="top_nav_right">
	<div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
	<a href="view_cart.php" style="color:#000;"><img src="images/troli1.png" style="width:35px;height:30px;"> Cart (<?php echo "$total_cart";?>)</a>
					
    </div>
    </div>
    <div class="clearfix"></div>
	</div>
    </div>


<!-- //sign in -->
	<div class="clearfix"></div>
		</div>
	    </div>
	    </div>
		</div>

<!-- //Modal1 -->
<!-- //register -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
<!-- Modal content-->
	<div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

	<div class="modal-body modal-body-sub_agile">
	<div class="col-md-8 modal_body_left modal_body_left1">
	<h3 class="agileinfo_sign">Sign Up <span>Now</span></h3>
	<form name="daftar" method="post" onsubmit=="return check()">
	<div class="styled-input agile-styled-input-top">
	<input type="text"  name="nama" required="">
		<label>Name</label>
		<span></span>
	    </div>
		<div class="styled-input">
		<input type="text" name="login" required=""> 
		<label>Username</label>
		<span></span>
		</div> 
		<div class="styled-input">
		<input type="password"  name="katalaluan" required=""> 
		<label>Password</label>
		<span></span>
		</div> 
		<div>
		<label> <input type="radio" name="capaian" value="0" checked> <sup>*</sup></label>
	   </div>
		<input type="submit" name="submit" value="Sign Up">
	   </form>
						 
	<div class="clearfix"></div>
	<p><a href="#">By clicking register, I agree to your terms</a></p>

<!-- Process register-->
<?php
include("config.php");
$result = false;
if(isset($_POST["nama"])){
    $nama = $_POST["nama"];
    $login = $_POST["login"];
    $katalaluan = md5($_POST["katalaluan"]);
    $capaian = $_POST["capaian"];
    
    $sql = "INSERT INTO pengguna (nama,login,katalaluan,capaian) values "." ('$nama','$login','$katalaluan','capaian')";
    $result = mysqli_query($conn,$sql);
}
?>

<?php
if ($result) {
     echo "<script type= 'text/javascript'>alert('ANDA TELAH BERJAYA MENDAFTAR. ');</script>";
} 
?>          
	
	</div>
    <div class="col-md-4 modal_body_right modal_body_right1">
	<img src="images/bakeri.jpg" alt=" "/>
	</div>
    <div class="clearfix"></div>
	</div>
    </div>
    </div>
    </div>

<!-- banner slide -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>	
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3><span>Nini Cupcake</span></h3>
						<p>Make your lovely day SPECIAL</p>
						
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3><span>Nini Cupcake</span></h3>
						<p>Highly decorate & taste</p>
						
					</div>
				</div>
			</div>
			
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3><span>Nini Cupcake</span></h3>
						<p>Affordable Price to Uolss</p>
						
					</div>
				</div>
			</div>
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

		<!-- The Modal -->
    </div> 
	<!-- //banner -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/kedainini.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span></span>Nini Cupcake</h3>
								<p>Delicious</p>
							</figcaption>			
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/bakeri.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span></span>Nini Cupcake</h3>
								<p>Give Happiness</p>
							</figcaption>			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
	
	<div class="clearfix"></div>
	</div>
	</div>
    </div>
    </div>
			<div class="clearfix"></div>
	   </div>							
<!--/grids-->



<!-- login -->
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-bottom">
										<h3>Sign up for free</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Re-type Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTER NOW" >
											</div>
											
										</form>
									</div>
									<div class="login-right">
										<h3>Sign in with your account</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Password :</h4>
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Forgot password?</a>
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="SIGNIN" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
