

<?php $this->view("header",$data); ?>

	
	<section id="advertisement">
		<div class="container">
			<img src="<?php echo  ASSETS . THEME ?>images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	<?php $this->view("aside_result",$data); ?>

					
	<?php $this->view("books_results",$data); ?>		
				
				
				</div>
			</div>
		</div>
	</section>
	
	<?php $this->view("footer",$data); ?>