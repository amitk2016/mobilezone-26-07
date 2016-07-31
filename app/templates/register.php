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
					<form>
						<div class="row">
							<div class="col-md-6 form-group">
								<label for="exampleInputFirstName">First Name</label>
								<input type="text" class="form-control" id="firstName" placeholder="First" name="">
							</div>
							<div class="col-md-6 form-group">
								<label for="exampleInputFirstName">Last Name</label>	
								<input type="text" class="form-control" id="LastName" placeholder="Last" name="">
							</div>
						</div>
						<div class="form-group">
		    				<label for="exampleInputEmail1">Email address</label>
		    				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  				</div>
		  				<div class="form-group">
		    				<label for="exampleInputPassword1">Password</label>
		    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  				</div>
		  				<div class="form-group">
		    				<label for="exampleInputPassword1">Confirm Password</label>
		    				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  				</div>
		  				<button type="submit" class="btn btn-success btn-lg btn-block btn-reg">Submit</button>
					</form>
				</div>
			</div>

		</div>
	</div>
