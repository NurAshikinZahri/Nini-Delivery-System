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
<!-- //tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

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
		    	Welcome, Hi (<?= $_SESSION['login']?>)</a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
				<a href="index.php">LOGOUT (<?= $_SESSION['login']?>) </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Call : 044718891</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">nmn_bc@gmail.com</a></li>
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="indexlog.php"><span>Bouquet</span>Choc <i class="" aria-hidden="true"></i></a></h1>
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
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item"><a class="menu__link" href="indexlog.php">Home <span class="sr-only">(current)</span></a></li>
					<li class="active menu__item"><a class="menu__link" href="about.php">About</a></li>
					<li class="dropdown menu__item">
						<a href="" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bouquet Type <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="all_b.php"><img src="images/images/photo4.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="simple_b.php">Simple Bouquet</a></li>
											<li><a href="birthday_b.php">Birthday Bouquet</a></li>
											<li><a href="annivesary_b.php">Annivesary Bouquet</a></li>
											<li><a href="combo_b.php">Combo Bouquet</a></li>
											<li><a href="budget_b.php">Budget Bouquet</a></li>
											<li><a href="graduation_b.php">Graduation Bouquet</a></li>
											
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
			</nav>	
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->
<!-- Modal1 -->
		
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal1 -->
<!-- Modal2 -->
		
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>
<!-- //Modal2 -->
<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>View <span>Cart </span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="indexlog.php">Home</a><i>|</i></li>
								<li>View Cart</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

<center><h4 style="text-align:center; font-weight:bold; margin: 15px 15px 15px 15px; padding: 15px 15px 15px 15px; text-transform: uppercase; float:center;"><u>List of item in Cart</u></h4></center>
</div>
<div class="cart-view-table-back">
   <form method="post" action="update_cart.php">
   <center>
   	 <table width="80%" cellpadding="6" cellspacing="">	
   	  <thead style="border-bottom: 1px solid #a6a6a6;">
          <tr><th>Product</th><th>Price</th><th>Quantity</th><th>Remove</th><th>Price</th></tr>
        </thead>
        <tbody>
        <?php
           if (isset($_SESSION['cart_product'])) {
              $total = 0;
              foreach ($_SESSION['cart_product'] as $key => $value) {
              
         ?>
            <tr style="border-bottom: 1px solid #a6a6a6;">
               <td><img src="images/images/<?= $value['product_photo']?>" width="100px" height="100px"/>
               <?= $value['product_name'] ?></td>
               
               <td><?= $currency.number_format($value['product_price'], 2)?></td>
               <td><input name="product_quantity[<?= $value['id']?>]" size="2" maxlenght="2" value="<?= $value['product_quantity']?>"/></td>
               <td><input type="checkbox" name="remove_code[]" value="<?= $value['id']?>"></td>
               <td><?= $currency.number_format($value['product_price'] * $value['product_quantity'], 2)?></td>
               
            </tr>   

        <?php 
            $subtotal = ($value['product_quantity'] * $value['product_price']);
                $total += $subtotal; 
              } // close foreach
              $_SESSION['total']= $total;
        ?>     
              <tr>
                  <td colspan="5">
                   <span style="float:right; text-align:left; font-weight:bold;">Total: <?php echo $currency.number_format($total, 2);?></span>
                  </td>
              </tr>
              <tr>
                  <td colspan="5">
                   <a href="simple_b.php" class="button"> Add Item </a>
                   <input type="hidden" name="checkout" value="1">
                   <button type="submit">Update Cart</button>
                   <a href="buyer.php" class="button"> Checkout </a>
                  </td>
              </tr> 
        <?php
           } //close if
           //unset($_SESSION['cart_products']);
        ?>
            

   	 </table>
     </center>
   </form>

</div>
</tbody>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
<br><br>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->
<!--/grids-->

				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<div class="footer">
	<div class="footer_agile_inner_info_w3l">
		<div class="col-md-3 footer-left">
			
				</div>
		<div class="col-md-9 footer-right">
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					
				</div>
				
				<div class="col-md-5 sign-gd-two">
				
					<div class="w3-address">
						<div class="w3-address-grid">
							<div class="w3-address-left">
							
							</div>
							<div class="w3-address-right">
								
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								
							</div>
							<div class="w3-address-right">
								</div>
							<div class="clearfix"> </div>
						</div>
						<div class="w3-address-grid">
							<div class="w3-address-left">
								
							</div>
							<div class="w3-address-right">
								 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				
				
				<div class="clearfix"></div>
			</div>
		</div>
		

		<div class="clearfix"></div>
	</div>
		<p class="copy-right"> 2018 &copy NMN Shop Bouquet Choc. All rights reserved.</a></p>
	</div>
</div>
<!-- //footer -->

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
	<!-- single -->
<script src="js/imagezoom.js"></script>
<!-- single -->
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
<!-- FlexSlider -->
<script src="js/jquery.flexslider.js"></script>
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
					<!-- //FlexSlider-->
<!-- //script for responsive tabs -->		
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
