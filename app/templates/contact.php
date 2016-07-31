<?php 

  $this->layout('master',[
    'title'=> "Contact Page",
    'description'=>"Connect with us"
  ]);

?>

<div class="container contact">
			<div class="heading">
				<h3>Contact Us</h3>
				<p class="est">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
					deserunt mollit anim id est laborum.</p>
			</div>
			
			<div class="mail-grids">
				<div class="col-md-8 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<form>
						<input type="text" value="Name"  required="">
						<input type="email" value="Email" required="">
						<input type="text" value="Subject" required="">
						<textarea type="text"  required="">Message...</textarea>
						<input type="submit" value="Submit Now" >
					</form>
				</div>
				<div class="col-md-4 mail-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<div class="mail-grid-right1">
						<img src="assets/images/steve-jobs.jpg" alt=" " class="img-responsive" />
						<h4>Steve Jobs<span>Manager</span></h4>
						<ul class="phone-mail">
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone: +1234 567 893</li>
							<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email: <a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
						<ul class="social-icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="g"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div style="overflow:hidden;resize:none;max-width:100%;"><div id="gmap-canvas" style="height:100%; width:100%;max-width:100%;"><iframe border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=100+Lambton+Quay,+Wellington,+New+Zealand&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embed-map-html" href="https://www.hostingreviews.website/compare/hostgator-vs-godaddy" id="enable-maps-data">godaddy vs hostgator</a><style>#gmap-canvas img{max-width:none!important;background:none!important;}</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=a6cc00f0-60d4-6936-f70a-b0a1684903c6&c=embed-map-html&u=1469209853" defer="defer" async="async"></script>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>