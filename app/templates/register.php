<?php 

  $this->layout('master',[
    'title'=> "Register",
    'description'=>"Register with us"
  ]);

?>


<div class="bg-register">
		<div class="container padding-top-10 rg-form">
			<div class="panel panel-primary">
				<div class="panel-heading rg-heading">Registration Form</div>
				<div class="panel-body">
					<form action="index.php?page=register" method="post">
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="exampleInputFirstName">First Name</label>
								<input type="text" class="form-control" id="firstName" placeholder="First" name="fname">
								<?php if ( isset($fnameMessage) ) : ?>		
									<p><?= $fnameMessage ?></p>
								<?php endif; ?>
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputFirstName">Last Name</label>	
								<input type="text" class="form-control" id="LastName" placeholder="Last" name="lname">
							</div>
						</div>
						<div class="form-group">
		    				<label for="exampleInputEmail1">Email address</label>
		    				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
		  				</div>
		  				<div class="form-group">
		    				<label for="exampleInputPassword1">Password</label>
		    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  				</div>
		  				<div class="form-group">
		    				<label for="exampleInputPassword1">Confirm Password</label>
		    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm-password">
		  				</div>
		  				<button type="submit" class="btn btn-success btn-lg btn-block btn-reg" name="new-account">Submit</button>
					</form>
				</div>
			</div>

		</div>
	</div>
