
	<?php $this->view("header",$data); ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			<?php if(is_array($data['rows'])): ?>

			<div class="register-req">
				<p>Please fill this form correctly .</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-1">
						
					</div>
				
					<div class="col-sm-5 clearfix">
					<span id="err"><?php check_error() ?><span>
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
							<form method="post">
									<input class="form-control" type="text" placeholder="First Name *" name="first_name" value="<?= isset( $_SESSION['first_name']) ?  $_SESSION['first_name']: ''; ?>" required><br>
									<input class="form-control" type="text" placeholder="Last Name" name="last_name" required value="<?= isset($_SESSION['last_name']) ? $_SESSION['last_name'] : ''; ?>"><br>
									<input class="form-control" type="tel" placeholder="Phone number" name="phone" required value="<?= isset($_SESSION['phone']) ? $_SESSION['phone'] : ''; ?>"><br>
								
							
							</div>
							<div class="form-two">
								
									<input class="form-control" type="text" placeholder="Zip / Postal Code *" name="code_postal" required value="<?= isset($_SESSION['code_postal']) ? $_SESSION['code_postal'] : ''; ?>"><br>
									<input class="form-control" type="text" placeholder="country" name="pays" required value="<?= isset($_SESSION['pays']) ? $_SESSION['pays'] : ''; ?>"><br>
									<input class="form-control" type="text" placeholder="City" name="ville" required value="<?= isset($_SESSION['ville']) ? $_SESSION['ville'] : ''; ?>"><br>
									
								
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
						<p>YOUR DETAILED ADDRESS:</p>
							<textarea  class="form-control"  placeholder="Full address" rows="16" name="ligne_adress" required value="<?= isset($_SESSION['ligne_adress']) ? $_SESSION['ligne_adress'] : ''; ?>"></textarea>
							<form>
						</div></div></div>
						
						
				 <input type="submit"  style="color: orange;background-color:white; border-style:solid; float:right;margin-right:50px;border-color:orange;padding:8px 50px 8px 50px;margin-top:20px;border-radius: 12px;font-size:20px;margin-bottom:150px;" value="Continue >">
					</form>
					<?php else: ?>
						<div style="color: red;font-size:20px;margin-bottom:300px;text-align:center;">
							Please add some items in the cart first.
						</div>
					<?php endif;?>

					</div></div>						
				</div>
			</div>
			

		
			
		</div>
	</section> <!--/#cart_items-->
	<style>
		#err{
			color: red;
			font-style: italic;
			
		}
	</style>
	<?php $this->view("footer",$data); ?>

	