 
	<?php $this->view("header",$data); ?>		
    
    <div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="Home">Home</a></li>
				  <li class="active">Contact</li>
				</ol>
			</div>
    <div>
        <h2>Your message is sent! </h2>
        <h3>Thank you for contacting us we will answer as soon as possible.</h3>

        <a href="home"><h4>Get Back to home</h4></a>




    </div>
	<?php $this->view("newest",$data); ?>	
					
				</div>
			</div>
		</div>
	</section>
	
<?php $this->view("footer"); ?>