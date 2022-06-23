<?php $this->view("header",$data); ?>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="Home">Home</a></li>
				  <li class="active">wishlist</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity"></td>
							<td class="total"></td>
							<td></td>
						</tr>
					</thead>
					<tbody>

						<?php if($data['rows_wish_list']) :?>
							<?php foreach($data['rows_wish_list'] as $row) :?>

						<tr>
							<td class="cart_product">
								<a href=""><img style="width: 100px;height:100px" src="<?= $row->image;?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4 style="text-align: center;"><a href=""><?= $row->title;?></a></h4>
								
							</td>
							<td class="cart_price">
								<p><?php convert_cur($row->price);?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									
								</div>
							</td>
							<td class="cart_total">
								
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" delete_id="<?=$row->book_id?>" onclick="delete_item('delete_id')" href="<?=ROOT?>add_to_wishlist/remove/<?=$row->book_id?>/remove"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php endforeach; ?>
						<?php else: ?>
							
							
							<td><p style="font-size: 20px;color:red;text-align:center;">NO BOOKS FOUND</p></td></tr>
								<?php endif; ?>
								</tbody>
			
					</table>
					<a href="<?=ROOT?>shop"> <button style="color: orange;background-color:white; border-style:solid; float:left;margin-left:50px;border-color:orange;padding:8px 10px 8px 10px;margin-top:20px;border-radius: 12px;font-size:20px;" ><span > < Continue shopping</span></button></a>

			
			</div>
		</div>
						</div>
	</section> <!--/#cart_items-->

	
					
				
			</div>
		</div>
	</section><!--/#do_action-->


	<?php $this->view("footer",$data); ?>