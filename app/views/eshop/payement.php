 
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $data['page_title'] ?> | Blib</title>
    <link href="<?php echo ASSETS . THEME ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS . THEME ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo ASSETS . THEME ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo ASSETS . THEME ?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo ASSETS . THEME ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/main.css" rel="stylesheet">
	<link href="<?php echo ASSETS . THEME ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo ASSETS . THEME ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo ASSETS . THEME ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo ASSETS . THEME ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo ASSETS . THEME ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo ASSETS . THEME ?>images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  
	
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +212 639964613</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> blib@gmail.com</a></li>
								<li><a href="#"><i class="fa fa-map-marker"></i>  MARRAKESH,MOROCCO</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://m.facebook.com/ouiam.khoudraji.1"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.linkedin.com/in/ouiam-khoudraji-b49b52182/"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index"><img style="width: 100px; hight:100px" src="<?php echo ASSETS . THEME ?>images/home/log.png" alt="" /></a>
						</div>
					
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if(isset($data['user_data'])): ?>
									<li><a href="#"><i class="fa fa-user"></i> <?= $data['user_data']->email ?></a></li>
								<?php  else: ?>
									<li><a href="#"><i class="fa fa-user"></i>Account</a></li>
									<?php endif; ?> 
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="<?php if(!empty($data['user_data'])){
											echo "checkout";

										}else{
											echo "login";
										}  ?>"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if(isset($data['user_data'])): ?>
								<li><a href="logout"><i class="fa fa-lock"></i> Logout</a></li>
								<?php  else: ?>
									<li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
									<?php endif; ?> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="Home">Home</a></li>
				  <li class="active">Payement</li>
				</ol>
			</div>

<div>

<h3>Once the payement will be done , Your order will be treated.</h3>
<h2>Thank you for the visit.</h2>

</div>

<div style="margin: 10px 50px 50px 10px;">
<?php if($_SESSION['payement_methode']=="PayPal"){?>
	<h5>Paypal checkout:</h5>
  <!-- Replace "test" with your own sandbox Business account app client ID -->
  <script src="https://www.paypal.com/sdk/js?client-id=AdOnSEq56Q18Lical5OBauBQK2oPODJLiHCTO_C2qMtIWhBk6UYBl0WbI0USFziOi6-3MX4kXl_1SeNl&currency=USD"></script>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '00.10' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>
	
			<?php }else {} ?>

			
</div>
<a href="home"><h3 >Get back to home.</h3></a>
           <div style="margin-bottom: 200px;"></div> 	
</section>	
<?php $this->view("footer"); ?>