<?php $this->view("header",$data); ?>
	 
	 <div id="contact-page" class="container">
	 <div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="Home">Home</a></li>
				  <li class="active">Contact</li>
				</ol>
			</div>
    <div>
    		<div class="row"> 
				<div class="col-sm-2">

				</div> 	
	    		<div class="col-sm-8">
				<span id="err"><?php check_error() ?><span>
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row"  method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input  type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		  			
	    	</div>  
    	</div>	
    </div>
	 </div><!--/#contact-page-->
	<?php $this->view("footer",$data); ?>
<style>	#err{
			color: red;
			font-style: italic;
			
		}</style>
	<?php $this->view("footer",$data); ?>