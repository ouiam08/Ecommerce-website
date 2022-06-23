
	<?php $this->view("header",$data); ?>

	<?php $this->view("aside_result",$data); ?>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo $data['prod_details']->image; ?>" style="width: 300px;height: 450px;" alt="" />
								
							</div>
							

								

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<!-- <img src="images/product-details/new.jpg" class="newarrival" alt="" />!-->
								
								<h1><?php echo $data['prod_details']->title; ?></h1>
								
								
								<span>
									<span><?= convert_cur($data['prod_details']->price); ?></span>
							
									
									
								</span>
								<p style="font-size: 20px;"><b>By:      </b><?php echo $data['prod_details']->author; ?></p>
								<p style="font-size: 20px;"><b>Pages numer:   </b> <?php echo $data['prod_details']->pages; ?></p>
								<a href="<?= ROOT ?>add_to_cart/<?=$data['prod_details']->book_id?>?>">	<button style="float: left;margin-top:10px;" type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">RESUME</a></li>
								
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" class="tab-pane fade" id="details" >
							</b><?php echo $data['prod_details']->description; ?>
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								
								
								
							</div>
							
							
							
						</div>
					</div><!--/category-tab-->
					
					<?php $this->view("newest",$data); ?>
					
				</div>
			</div>
		</div>
	</section>
	
	<?php $this->view("footer",$data); ?>
