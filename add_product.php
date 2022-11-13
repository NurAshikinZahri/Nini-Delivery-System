<?php
session_start();
if(!isset($_SESSION["login"]))
    header("location: index.php");
?>

<!DOCTYPE html>
<html>
<head>
	<style>
	* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 850px;/* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.info {
    background-color: #e7f3fe;
    border-left: 6px solid #2196F3;
}
    
	input[name=product_name] {
    width:40%;
    padding:12px 20px;
    margin: 8px 0;
    box-sizing:border-box;
    border:3px solid #787878;
    -webkit-transition:0.5s;
    transition:0.5s;
    outline: none;
}
input[name=product_code] {
    width:30%;
    padding:12px 20px;
    margin: 8px 0;
    box-sizing:border-box;
    border:3px solid #787878;
    -webkit-transition:0.5s;
    transition:0.5s;
    outline: none;
}

input[name=product_name] {
    width:70%;
    padding:12px 20px;
    margin: 8px 0;
    box-sizing:border-box;
    border:3px solid #787878;
    -webkit-transition:0.5s;
    transition:0.5s;
    outline: none;
}
input[name=product_description] {
    width:70%;
    padding:12px 20px;
    margin: 8px 0;
    box-sizing:border-box;
    border:3px solid #787878;
    -webkit-transition:0.5s;
    transition:0.5s;
    outline: none;
}
input[name=product_price] {
    width:70%;
    padding:12px 20px;
    margin: 8px 0;
    box-sizing:border-box;
    border:3px solid #787878;
    -webkit-transition:0.5s;
    transition:0.5s;
    outline: none;
}
input[name=product_name] {
    width:70%;
    padding:12px 20px;
    margin: 8px 0;
    box-sizing:border-box;
    border:3px solid #787878;
    -webkit-transition:0.5s;
    transition:0.5s;
    outline: none;
}
input[name=quantity] {
    width:70%;
    padding:12px 20px;
    margin: 8px 0;
    box-sizing:border-box;
    border:3px solid #787878;
    -webkit-transition:0.5s;
    transition:0.5s;
    outline: none;
}
input[name=submit] {
    background-color: #555555;
    border: 2px solid #555555;
    border-radius: 12px;
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 3px 1px;
    cursor: pointer;
}

.cover {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 100px;
}

</style>
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
<!-- Customize styles -->
<link href="admin.css" rel="stylesheet"/>
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

			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
			<?php
    if($_SESSION["capaian"] == 1) { ?>
    Welcome, Hi (<?= $_SESSION['login']?>)
<?php } ?>
</li>

		    <li> <a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-unlock-alt" aria-hidden="true"></i> 
             
    <a href="index.php">LOGOUT (<?= $_SESSION['login']?>) </a></li>
		   
			
			
			
		</ul>
	</div>
</div>
<!-- //header -->
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">

				<div class="clearfix"></div>
			</form>
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>WELCOME</span><br>Admin<i class="" aria-hidden="true"></i></a></h1>
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
					<li class="menu__item"><a class="menu__link" href="indexlog.php">Home</a></li>
					 <?php
    if($_SESSION["capaian"] == 1) { ?>
					<li class="active menu__item menu__item--current"><a class="menu__link" href="add_product.php">Add Product <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="user_data.php">User Data</a></li>
						<li class=" menu__item"><a class="menu__link" href="view_product.php">Product</a></li>
						<li class=" menu__item"><a class="menu__link" href="sell.php">Order</a></li>
							
									</div>
									
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					
					</li>
					
				  </ul>
				</div>
				<?php } ?>
			  </div>
			</nav>	
		</div>
		
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
		
				<!-- Modal content-->

								<div class="clearfix"></div>



														
<?php 
  include('config.php');               

if(isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * from user WHERE username='$username' AND password='$password';";

	$result = mysqli_query($conn, $query);
	if(mysqli_num_rows($result) == 0 )
		  header('location: login.php?e=true');

		$_SESSION['username'] = $username;
}


if(!isset($_SESSION['username']))

if(isset($_POST['product_code'])) {
	$target_dir ="images/";
	$target_file = $target_dir . basename($_FILES["product_photo"]["name"]);

	if (move_uploaded_file($_FILES['product_photo']['tmp_name'], $target_file)) {
		
		$product_code = $_POST['product_code'];
		$product_name = $_POST['product_name'];
		$product_description = $_POST['product_description'];
		$product_price = $_POST['product_price'];
		$product_photo = basename($_FILES["product_photo"]["name"]);
		$quantity = $_POST['quantity'];
		$query = "INSERT INTO product(product_code, product_name, product_description, product_price, product_photo, quantity) VALUES ('$product_code', '$product_name', '$product_description', '$product_price', '$product_photo', '$quantity')";
		$result = mysqli_query($conn, $query);
		if($result)
			echo "OK";
	}
	else
		echo 'Fail to insert';
}
?>
<div class="clearfix"></div>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <h2>Product Code Info .. <br><br></h2>
    <p><div class="info">
  <p><strong>Product Code!</strong>
  	<br>Here are example code for Product Code.<br><br>
  	<ol>
  	<li>SB = (Wedding Cake)</li>
        <li>BB = (Birthday Cake)</li>
        <li>AB = (Cupcake)</li>
        <li>CB = (Drinks)</li>
</ol></p><br><br>
<strong>*Insert product code according with number, Example : (SB1) .</strong>
</div></p>
  </div>
  <div class="column" style="background-color:#bbb;">
    <h2>Add some products .. <br><br></h2>
    <p>
<form method="post" enctype="multipart/form-data">
<section id="contact-form">
    
  <form id="contact" name="contact" accept-charset="utf-8">
     <cover>
<input type="text" list="code" name="product_code" type="text" placeholder="Product Code"\\ />
<datalist id="code">
  <option>SB</option>
  <option>BB</option>
  <option>AB</option>
  <option>CB</option>
</datalist>
      <br>
    <label><span>Product Name</span><br><input name="product_name" type="text" placeholder="Product Name"/></label>
    <br>
    <label><span>Product Description</span><br><input name="product_description" type="text" placeholder="Product Description"/></label>
    <br>
    <label><span>Price</span><br><input name="product_price" type="text" placeholder="Product Price"/></label>
    <br>
    <label><span>Image</span><br><input name="product_photo" type="file"/></label>
    <br>
    <label><span>Quantity</span><br><input name="quantity" type="text" placeholder="Quantity"/></label>
    <br>
    <input name="submit" type="submit" value="Upload">
    
  </form>
</section>
</form>

</cover>
                 
                 
                 
                 
                 

    </div>
    </p>
  </div>
</div>


 

				
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
		<p class="copy-right">2018 & copy  Nini Cupcake. All rights reserved | Design by <a href="http://w3layouts.com/">Nursabihah</a></p>
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
