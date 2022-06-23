<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Newest books</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<?php	if(!empty($data['prod_by_date'][0])){ ?>
													<img src="<?php echo  $data['prod_by_date'][0]->image ;?>" style="width: 200px;height: 350px;" alt="" />
													<h2><?php convert_cur($data['prod_by_date'][0]->price);?></h2>
													<p><?php echo $data['prod_by_date'][0]->title;?></p>
													<a href="<?= ROOT ?>add_to_cart/<?php echo $data['prod_by_date'][0]->book_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													<?php } ?>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<?php	if(!empty($data['prod_by_date'][1])){ ?>
													<img src="<?php echo  $data['prod_by_date'][1]->image ;?>" style="width: 200px;height: 350px;" alt="" />
													<h2><?php convert_cur($data['prod_by_date'][1]->price);?></h2>
													<p><?php echo $data['prod_by_date'][1]->title;?></p>
													<a href="<?= ROOT ?>add_to_cart/<?php echo $data['prod_by_date'][1]->book_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													<?php } ?>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<?php	if(!empty($data['prod_by_date'][2])){ ?>
													<img src="<?php echo  $data['prod_by_date'][2]->image ;?>" style="width: 200px;height: 350px;" alt="" />
													<h2><?php convert_cur($data['prod_by_date'][2]->price);?></h2>
													<p><?php echo $data['prod_by_date'][2]->title;?></p>
													<a href="<?= ROOT ?>add_to_cart/<?php echo $data['prod_by_date'][2]->book_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													<?php } ?>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<?php	if(!empty($data['prod_by_date'][3])){ ?>
													<img src="<?php echo $data['prod_by_date'][3]->image ;?>" style="width: 200px;height: 350px;" alt="" />
													<h2><?php convert_cur($data['prod_by_date'][3]->price);?></h2>
													<p><?php echo $data['prod_by_date'][3]->title;?></p>
													<a href="<?= ROOT ?>add_to_cart/<?php echo $data['prod_by_date'][3]->book_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													<?php } ?>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<?php	if(!empty($data['prod_by_date'][4])){ ?>
													<img src="<?php echo  $data['prod_by_date'][4]->image ;?>" style="width: 200px;height: 350px;" alt="" />
													<h2><?php convert_cur($data['prod_by_date'][4]->price);?></h2>
													<p><?php echo $data['prod_by_date'][4]->title;?></p>
													<a href="<?= ROOT ?>add_to_cart/<?php echo $data['prod_by_date'][4]->book_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													<?php } ?>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<?php	if(!empty($data['prod_by_date'][5])){ ?>
													<img src="<?php echo  $data['prod_by_date'][5]->image ;?>" style="width: 200px;height: 350px;" alt="" />
													<h2><?php convert_cur($data['prod_by_date'][5]->price);?></h2>
													<p><?php echo $data['prod_by_date'][5]->title;?></p>
													<a href="<?= ROOT ?>add_to_cart/<?php echo $data['prod_by_date'][5]->book_id;?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
													<?php } ?>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->