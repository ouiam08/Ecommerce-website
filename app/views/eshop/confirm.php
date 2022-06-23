 
	<?php $this->view("header",$data); ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="Home">Home</a></li>
				  <li class="active">Confirmation</li>
				</ol>
			</div>
<h3>Please check all your order information before paying!</h3>
	<h4>In case you mess or you give an invalid information, your order cannot be treated.</h4>

	<br>
	<h5>Your informations:</h5>
	<ul class="list-group">
  <li class="list-group-item"><span class="labell">First name:</span><span class="result"><?=$_SESSION['first_name']?></span></li>
  <li class="list-group-item"><span class="labell">Last name:</span ><span class="result"><?= $_SESSION['last_name']?></span></li>
  <li class="list-group-item"><span class="labell">Email:</span ><span class="result"><?=$data['user_data']->email?></span></li>
  <li class="list-group-item"><span class="labell">Phone number:</span><span class="result"><?=$_SESSION['phone']?></span></li>
  <li class="list-group-item"><span class="labell">Zipe code:</span ><span class="result"><?=$_SESSION['code_postal']?></span></li>
  <li class="list-group-item"><span class="labell">Country:</span><span class="result"><?=$_SESSION['pays']?></span></li>
  <li class="list-group-item"><span class="labell">City:</span><span class="result"><?= $_SESSION['ville']?></span></li>
  <li class="list-group-item"><span class="labell">Full address:</span ><span class="result"><?= $_SESSION['ligne_adress']?></span></li>
</ul>
	<h5>Your order:</h5>
	
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						<?php if($data['rows']) :?>
							<?php foreach($data['rows'] as $row) :?>

						<tr>
							<td class="cart_product">
								<a href=""><img style="width: 100px;height:100px" src="<?= $row->image;?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4 style="text-align: center;"><a href=""><?= $row->title;?></a></h4>
								
							</td>
							
							<td class="cart_price">
								<p><?= convert_cur($row->price);?></p>
							</td>
							<td class="cart_price">
								<p><?= $row->cart_qty;?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?= convert_cur($row->price * $row->cart_qty)?></p>
							</td>
							<td class="cart_delete">
								
							</td>
						</tr>
						<?php endforeach; ?>
						<?php else: ?>
							
							
							<td><p style="font-size: 20px;color:red;text-align:center;">NO BOOKS FOUND</p></td></tr>
								<?php endif; ?>
								</tbody>
			<tr style="background-color:orange ;">
			
						<td style="font-size: 30px;color:red;text-align:center;">Total :</td>
						<td>   </td>
						<td>   </td>
						<td>   </td>
							<td>
							 <span style="font-size: 25px;color:white;text-align:center;"><? convert_cur(number_format($data['sub_total']))?></span>
							</td>
							<td>   </td>
				</tr>
	
					</table></div>
					<h1>Choose your payement methode:</h1>
					<form method="POST">
					<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="payement_methode">
							<option value="PayPal">PayPal</option>
							
									</select>

							

				
					<input type="submit"  style="color: orange;background-color:white; border-style:solid; float:right;margin-right:50px;border-color:orange;padding:8px 50px 8px 50px;margin-top:20px;border-radius: 12px;font-size:20px;margin-bottom:150px;" value="Pay! >">
					</form> 		
				</div>
		</div>

						</div>
	</section> <!--/#cart_items-->
<style>
	.labell{
		font-size: 17px;
	}
	.result{
		margin-left: 400px;
		display: block;
		font-size: 15px;
	}
</style>
<?php $this->view("footer"); ?>