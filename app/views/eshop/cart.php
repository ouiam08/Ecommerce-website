<?php $this->view("header",$data); ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="Home">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
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
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="<?=ROOT?>add_to_cart/add_quantity/<?=$row->book_id?>"> + </a>
									<input oninput="edit_quantity(this.value,'<?=$row->book_id?>')" class="cart_quantity_input" type="text" name="quantity" value="<?= $row->cart_qty;?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="<?=ROOT?>add_to_cart/subtract_quantity/<?=$row->book_id?>"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?= convert_cur($row->price * $row->cart_qty);?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" delete_id="<?=$row->book_id?>" onclick="delete_item('delete_id')" href="<?=ROOT?>add_to_cart/remove/<?=$row->book_id?>/remove"><i class="fa fa-times"></i></a>
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
							 <span style="font-size: 25px;color:white;text-align:center;"><?php convert_cur($data['sub_total'])?></span>
							</td>
							<td>   </td>
				</tr>
	
					</table>
					<a href="<?=ROOT?>shop"> <button style="color: orange;background-color:white; border-style:solid; float:left;margin-left:50px;border-color:orange;padding:8px 10px 8px 10px;margin-top:20px;border-radius: 12px;font-size:20px;" ><span > < Continue shopping</span></button></a>

					<a href="<?=ROOT?><?php if(!empty($data['user_data'])){
											echo "checkout";

										}else{
											echo "login";
										}  ?>"> <button style="color: orange;background-color:white; border-style:solid; float:right;margin-right:50px;border-color:orange;padding:8px 50px 8px 50px;margin-top:20px;border-radius: 12px;font-size:20px;margin-bottom:150px;" ><span >Checkout ></span></button></a>
			</div>
		</div>
						</div>
	</section> <!--/#cart_items-->

	
					
				
			</div>
		</div>
	</section><!--/#do_action-->
<script>


function edit_quantity(quantity,id){
		
		if(isNaN(quantity))
		return;
	
		send_data({
				quantity:quantity.trim(),
				id:id.trim()
		},"edit_quantity");
		
	
	}

	function delete_item(id){
	
		send_data({
				quantity:quantity.trim(),
				id:id.trim()
		},"delete_item");
		
	
	}


function send_data(data = {},data_type){

	var ajax = new XMLHttpRequest();

	ajax.addEventListener('readystatechange',function(){
		if(ajax.readyState == 4 && ajax.status == 200){
			handle_result(ajax.responseText);
			
		}
	});

	ajax.open("POST","<?=ROOT?>ajax_cart/"+ data_type +"/"+ JSON.stringify(data),true);
	ajax.send();

}

function handle_result(result)
{

	console.log(result);


	if(result != ""){
		var obj = JSON.parse(result);

		if(typeof obj.data_type != 'undefined'){

			if(obj.data_type == 'delete_item'){
				window.location.href = window.location.href ;}
			else if(obj.data_type == 'edit_quantity'){
				window.location.href = window.location.href ;}
		}
	}
}
	</script>

	<?php $this->view("footer",$data); ?>