 
	<?php $this->view("header",$data); ?>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>B</span>lib</h1>
									<h2>GET YOU DESIRED BOOK NOW!</h2>
									<p> It's more than a website, it's your digital library branch. </p>
									<a href="shop"><button type="button" class="btn btn-default get">See more</button></a>
								</div>
								<div class="col-sm-6">
									<img style="width: 200px; hight: 200 px" src="<?php echo  ASSETS . THEME ?>images/home/hpcc.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
							<div class="col-sm-6">
									<h1><span>B</span>lib</h1>
									<h2>GET YOU DESIRED BOOK NOW!</h2>
									<p> It's more than a website, it's your digital library branch. </p>
									<a href="shop"><button type="button" class="btn btn-default get">See more</button></a>
								</div>
								<div class="col-sm-6">
									<img style="width: 200px; hight: 200 px" src="<?php echo  ASSETS . THEME ?>images/home/martian.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
							<div class="col-sm-6">
									<h1><span>B</span>lib</h1>
									<h2>GET YOU DESIRED BOOK NOW!</h2>
									<p> It's more than a website, it's your digital library branch. </p>
									<a href="shop"><button type="button" class="btn btn-default get">See more</button></a>
								</div>
								<div class="col-sm-6">
									<img style="width: 200px; hight: 200 px" src="<?php echo  ASSETS . THEME ?>images/home/wwz.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
	<?php $this->view("aside",$data); ?>

	
		
	<?php $this->view("books",$data); ?>
	<?php $this->view("newest",$data); ?>			
	
					
				</div>
			</div>
		</div>
	</section>
	
<?php $this->view("footer"); ?>