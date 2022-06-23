
	<?php $this->view("header",$data); ?>
	
	<section id="form" style="margin-top: 5px">
		
		<div class="container">
			<div class="row" style="text-align: center;">
				<div class="col-sm-4" style="float: none;display: inline-block;">
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<span id="err"><?php check_error() ?><span>
						<form method="POST">
							<input type="email" id="Adresse" placeholder="Email Address" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : ''; ?>" required/>
							<div class="error" id="div_adresse">The email should be like :user@exemple.com</div>
							<input type="password" id="Mdp" placeholder="Password" name="password" required/>
							<div class="error" id="div_mdp" id="div_mdp">Password must be at least 4 characters long!</div>
							<input type="password" id="MdpC" placeholder="Confirm Password" name="password2"required/>
							<div class="error" id="div_psw">The passwords are not the same!</div>

							<button style="margin:auto;" type="submit" class="btn btn-default">Signup</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<style>
		#err{
			color: red;
			font-style: italic;
			
		}
		.error{
    display: block;
    color: red;
    font-size: 12px;
	margin-bottom: 20px;
	align-items: flex-start;

   
}

#div_mdp{
  display: none;
 
}
#div_adresse{
    display: none;
   

  }
  #div_psw{
 display: none;
  }

	</style>
	

	
	<?php $this->view("footer",$data); ?>
  
