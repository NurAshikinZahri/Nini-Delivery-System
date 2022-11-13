<?php
	include("config.php");
	session_start();
	if(isset($_POST['product_code'])) { //kalau submit form
		$product_code = $_POST['product_code']; // data from input form
		$product_name = $_POST['product_name'];
		$product_description = $_POST['product_description'];
		$product_price = $_POST['product_price'];
		$product_photo = $_POST['product_photo'];
		$quantity = $_POST['quantity'];
		$id = $_GET['id'];

		$sql = "UPDATE product SET product_code='$product_code', product_name='$product_name', "
				."product_description='$product_description', product_price='$product_price', product_photo='$product_photo',"
				."quantity='$quantity' WHERE id=$id";

		$query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		if($query) { // if successfully inserted
			header("location: view_product.php");
		}
}
	if(isset($_GET['id'])) { //kalau click
		$id = $_GET['id'];
		$sql = "SELECT * FROM product WHERE id=$id";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<style>
	html {
  font: 300 100%/1.5 Ubuntu, sans-serif;
  color: #333;
  overflow-x: hidden;
}
h2 {
  margin: 0;
  color: #8495a5;
  font-size: 2.5em;
  font-weight: 300;
}
#contact-form {
  max-width: 1208px;
  max-width: 75.5rem;
  margin: 0 auto;
}
#contact, label, input[name="submit"] {
  position: relative;
}
label > span, input, textarea, button {
  box-sizing: border-box;
}
label {
  display: block;
}
label > span {
  display: none;
}
input, textarea, button {
  width: 100%;
  padding: 0.5em;
  border: none;
  font: 300 100%/1.2 Ubuntu, sans-serif;
}
input[type="text"], input[type="email"], textarea {
  margin: 0 0 1em;
  border: 1px solid #ccc;
  outline: none;
}
input.invalid, textarea.invalid {
  border-color: #d5144d;
}
textarea {
  height: 6em;
}
input[type="submit"], button {
  background:#FF9900;
  color: black;
}
input[type="submit"]:hover, button:hover {
  background: #C13100;
}
@media screen and (min-width: 30em) {
  #contact-form h2 {
    margin-left: 26.3736%;
    font-size: 2em;
    line-height: 1.5;
  }
  label > span {
    vertical-align: top;
    display: inline-block;
    width: 26.3736%;
    padding: 0.5em;
    border: 1px solid transparent;
    text-align: right;
  }
  input, textarea, button {
    width: 73.6263%;
    line-height: 1.5;
  }
  textarea {
    height: 10em;
  }
  input[type="submit"], button {
    margin-left: 26.3736%;
  }
}
@media screen and (min-width: 48em) {
  #contact-form {
    text-align: justify;
    line-height: 0;
  }
  #contact-form:after {
    content: '';
    display: inline-block;
    width: 100%;
  }
  #contact-form h2 {
    margin-left: 17.2661%;
  }
  #contact-form form, #contact-form aside {
    vertical-align: top;
    display: inline-block;
    width: 65.4676%;
    text-align: left;
    line-height: 1.5;
  }
  #contact-form aside {
    width: 30.9353%;
  }
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
    Welcome,(<?= $_SESSION['login']?>)
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
			
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="indexlog.php"><span>WELCOME</span><br>Admin</a></h1>
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
					<li class="menu_item"><a class="menu__link" href="add_product.php">Add Product</a></li>
					<li class=" menu__item"><a class="menu__link" href="user_data.php">User Data</a></li>
						<li class="menu__item"><a class="menu__link" href="view_product.php">Product</a></li>
						<li class="active menu__item menu__item--current"><a class="menu__link" href="sell.php">Order<span class="sr-only">(current)</span></a></li>
							
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
<form method="post" enctype="multipart/form-data">
<div class="form">
   <form method="POST"onsubmit="return validation();">
<section id="contact-form">
  <h2>Edit Product</h2>
  <form id="contact" name="contact" accept-charset="utf-8">
    <label><span>Code</span><input name="product_code" id="product_code" type="text" value="<?php echo $row['product_code']?>"></label>
    <label><span>Product Name</span><input name="product_name" id="product_name" type="text" value="<?php echo $row['product_name']?>"> </label>
    <label><span>Description</span><textarea name="product_description" id="product_description"><?php echo $row['product_description']?></textarea></label>
    <label><span>Price</span><input name="product_price" id="product_price" type="text" value="<?php echo $row['product_price']?>"></label>

    <label><span></span>
    <?php if($row['product_photo'] != ""): ?>
		<img src="images/images/<?php echo $row['product_photo']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
		<?php else: ?>
		<img src="images/images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
		<?php endif; ?></label>
     <label><span>Cover Photo</span><input name="product_photo" id="product_photo" type="text" value="<?php echo $row['product_photo']?>"></label>


        <label><span>Quantity</span><input name="quantity" id="quantity" type="text" value="<?php echo $row['quantity']?>"></label>
        
    <input name="submit" type="submit" value="Update"/>
  </form>
  <aside>
</section>
	</div>

    

	<script>
		function validation() {
			if(!confirm("Kemaskini data ini?")) {
				return false; //not submit
			}
			var mesti = document.getElementsByClassName("mesti");
			var jumlah_mesti = mesti.length;
			for(var i = 0; i < jumlah_mesti; i++) {
					mesti[i].style.background = ""; //clear all red
				}

				for(var i = 0; i < jumlah_mesti; i++) {
					if(mesti[i].value==""){//kalau empty
						mesti[i].style.background = "red";
					return false; //Jangan submit
				}
				
			}
			return true;
		}
	</script>
 
                 
                 
                 
                 

    </div>
						</div>
						
						<div class="clearfix"></div>
					</div>
				</div>
				<!-- //Modal content-->
			</div>
		</div>

<!-- //Modal2 -->

<!-- banner -->
	
		<!-- The Modal -->
    </div> 
	<!-- //banner -->
    
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
	<!-- schedule-bottom -->

<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	
			
		
				
		<div class="clearfix"></div>
	</div>
	</div>
    </div>
<!--/grids-->
      
			 
			</div>
			<div class="clearfix"></div>
	   </div>							
<!--/grids-->
<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							
						
							
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
									
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		
	<!-- //we-offer -->



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
