<?php 

  $this->layout('master',[
    'title'=> "Login here",
    'description'=>"Login here to be our member"
  ]);

?>

<div class="login-body">
	<div class="container login-box">
		<div class="panel panel-primary">
				<div class="panel-heading rg-heading">Login</div>
					<div class="panel-body">
						<form action="index.php?page=login" method="post" >
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email address</label>
						    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email" value="<?= isset($_POST['login']) ? $_POST['email'] : ''?>">
						    <?php if ( isset ($emailMessage) ): ?> 
						    	<p><?= $emailMessage?></p>
						    <?php endif ?>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
						    <?php if ( isset ($passwordMessage) ): ?> 
						    	<p><?= $passwordMessage?></p>
						    <?php endif ?>
						    <br>
						    <?php if ( isset ($loginMessage) ): ?> 
						    	<p><?= $loginMessage?></p>
						    <?php endif ?>
						  </div>
						  <button type="submit" name="login" class="btn btn-default btn-block btn-reg btn-success">Submit</button>
							  <ul class="remember-me">
							  	<li>
							  		<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember me</label>
							  	</li>
							  	<li>
							  		<div class="forgot">
									<a href="#">forgot password?</a>
								</div>
							  	</li>
							  </ul>	
							<h5><a href="index.php?page=register">Don' have an account? Sign Up!</a></h5>	
						</form>
					</div>
				</div>
		</div>
	</div>
</div>