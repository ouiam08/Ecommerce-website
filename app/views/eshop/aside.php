<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Categories</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a  href="shop">
											<span class="badge pull-right"></i></span>
											ALL BOOKS
										</a>
									</h4>
								</div>
							</div>
							<?php for($i=0 ; $i < count($data['Cats_data']) ; $i++) { ?>
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a  href="?category=<?php echo  $data['Cats_data'][$i]->name; ?>" >
											<span class="badge pull-right"></i></span>
											<?php echo  $data['Cats_data'][$i]->name; ?>
										</a>
									</h4>
								</div>
							</div>
					<?php } ?>
					
						</div><!--/category-products-->

					
						
						
					
                       
                        </div>
				</div>
                