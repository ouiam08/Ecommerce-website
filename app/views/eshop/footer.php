<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>B</span>lib</h2>
							<p>It's more than a website, it's your digital library branch.</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://www.youtube.com/watch?v=PeLoyrDqL_A">
									<div class="iframe-img">
										 <img src="<?php echo ASSETS . THEME ?>images/home/l4.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
										
									</div>
								</a>
								<p>OUR STUDYING SPACE</p>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://www.youtube.com/watch?v=PeLoyrDqL_A">
									<div class="iframe-img">
										<img src="<?php echo ASSETS . THEME ?>images/home/l1.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>OUR REAL LIBRARY</p>
								
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://www.youtube.com/watch?v=PeLoyrDqL_A">
									<div class="iframe-img">
										<img src="<?php echo ASSETS . THEME?>images/home/l2.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>OUR MAGNIFICENT VIEWS</p>
								
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="https://www.youtube.com/watch?v=PeLoyrDqL_A">
									<div class="iframe-img">
										<img src="<?php echo ASSETS . THEME?>images/home/l3.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>OUR VENTAGE BOOKS</p>
								
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo ASSETS . THEME?>images/home/map.png" alt="" />
							<p><a href="https://www.google.com/maps/place/Facult%C3%A9+des+Sciences+et+Techniques/@31.644556,-8.020306,16z/data=!4m5!3m4!1s0xdafee9eb5090999:0x2dca05e37a64f83b!8m2!3d31.6445494!4d-8.0202803?hl=fr-FR">FSTG B.P 549, Av.Abdelkarim Elkhattabi, Guéliz Marrakech</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Quick links</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Home</a></li>
								<li><a href="contact">Contact Us</a></li>
								<li><a href="<?php if(!empty($data['user_data'])){
											echo "checkout";

										}else{
											echo "login";
										} ?>">Make an order</a></li>
								<li><a href="shop">Products</a></li>
								<li><a href="admin">Admin</a></li>
								
							</ul>
						</div>
					</div>
				
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Extra links</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="login">Login</a></li>
								<li><a href="signin">Register</a></li>
								<li><a href="cart">Cart</a></li>
								<li><a href="wishlist">Wishlist</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<h2>Follow us</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Facebook</a></li>
								<li><a href="#">twitter</a></li>
								<li><a href="#">Linkedin</a></li>
								<li><a href="#">Instagram</a></li>
							</ul>
						</div></div>
						<div class="col-sm-3">
						<div class="single-widget">
							<h2>Contact us</h2>
							<ul class="nav nav-pills nav-stacked">
								<li> <a href="tel:1234567890"><i class="fa fa-phone"></i>+212 639964613</a></li>
								<li><a href="tel:11122233333"><i class="fa fa-phone"></i>+212 534252421</a></li>
								<li> <a href="mailto:blib@gmail.com"><i class="fa fa-envelope"></i>blib@gmail.com</a></li>
								<li><a href="https://www.google.com/maps/place/Facult%C3%A9+des+Sciences+et+Techniques/@31.644556,-8.020306,16z/data=!4m5!3m4!1s0xdafee9eb5090999:0x2dca05e37a64f83b!8m2!3d31.6445494!4d-8.0202803?hl=fr-FR"><i class="fa fa-map-marker"></i>MARRAKESH,MOROCCO</a></li>
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © <?= date('Y'); ?> . All rights reserved.</p>
					<p class="pull-right">Designed by KHOUDRAJI OUIAM & CHIHAB AMAL</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="<?php echo ASSETS . THEME?>js/jquery.js"></script>
	<script src="<?php echo ASSETS . THEME?>js/bootstrap.min.js"></script>
	<script src="<?php echo ASSETS . THEME?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo ASSETS . THEME?>js/price-range.js"></script>
    <script src="<?php echo ASSETS . THEME?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo ASSETS . THEME?>js/main.js"></script>
	<script src="<?php echo ASSETS . THEME?>js/signup.js"></script>
	


</body>
</html>