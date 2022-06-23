
						
						<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">
                            
                            <?php if(isset($_GET['prod_result'])){echo $_GET['prod_result'];}

                        else{echo "BLIB";} ?>
                        'S RESULTS</h2>

						<?php 
                        if(isset($_GET['prod_result'])){
							if(!is_array($data['user_search'])){?><p style="font-size: 20px;color:red;"> <?php
								 echo $data['user_search']; ?></p><?php
								
								$c =0;
							}else{
								$c=count($data['user_search']);
							}
						}else if(isset($data['prod_data'])){
							$c=count($data['prod_data']);
						}
						
                        if($c != 0){
                        for($i=0 ; $i <$c ; $i++) { ?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="<?php if(isset($_GET['prod_result'])){echo $data['user_search'][$i]->image;} else{echo   $data['prod_data'][$i]->image;} ?>" style="width: 200px;height: 350px;" alt="" />
										<h2><?php if(isset($_GET['prod_result'])) {convert_cur($data['user_search'][$i]->price);} else{convert_cur($data['prod_data'][$i]->price) . "";} ?></h2>
										<p><?php if(isset($_GET['prod_result'])){echo $data['user_search'][$i]->title;} else{echo   $data['prod_data'][$i]->title;}?></p>
										
									</div>

									<div class="product-overlay">
										<div class="overlay-content">
												<div class="more_details" style="display: block;">
												<p class="de_all" > <span style="font-size: 20px;" class="det">Title:</span><span style="color: red;font-size: 20px;"><?php if(isset($_GET['prod_result'])){echo $data['user_search'][$i]->title;} else{echo   $data['prod_data'][$i]->title;}?></span></p>

											<p class="deteils"  > <span style="font-size: 20px;" class="det">Author:</span><span style="color: red;font-size: 20px;"><?php if(isset($_GET['prod_result'])){echo $data['user_search'][$i]->author;} else{echo   $data['prod_data'][$i]->author;}?></span></p>
											<p class="deteils" > <span style="font-size: 20px;" class="det" >Language:</span><span style="color: red;font-size: 20px;"><?php if(isset($_GET['prod_result'])){echo $data['user_search'][$i]->language;} else{echo   $data['prod_data'][$i]->language;}?></span></p>
											<p class="deteils" > <span style="font-size: 20px;" class="det" >Pages:</span><span style="color: red;font-size: 20px;"><?php if(isset($_GET['prod_result'])){echo $data['user_search'][$i]->pages;} else{echo   $data['prod_data'][$i]->pages;}?></span></p>
												</div>
											
											<a href="<?= ROOT ?>add_to_cart/<?php if(isset($_GET['category'])){echo $data['prod_by_cat'][$i]->book_id;} else{echo   $data['prod_data'][$i]->book_id;}?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											<a href="productdetails?product=<?php if($_GET['prod_result']){echo $data['user_search'][$i]->book_id;} else{echo   $data['prod_data'][$i]->book_id;}?>" class="btn btn-default add-to-cart"><i class="fa fa-plus"></i>More details</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										
										<li><a href="<?= ROOT ?>add_to_wishlist/<?php if(isset($_GET['category'])){echo $data['prod_by_cat'][$i]->book_id;} else{echo   $data['prod_data'][$i]->book_id;}?>"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>

										
									</ul>
								</div>
							</div>
						</div>
					
						<?php }} ?>
					
						
					</div><!--features_items-->