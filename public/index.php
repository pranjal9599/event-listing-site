<?php include('../private/layouts/full-header.php'); ?>
<?php if(isset($_SESSION['error']) && $_SESSION['error'] != ''): ?>
	
	<div class="alert alert-danger alert-dismissible" role="alert" style="position: fixed; display:block; width: 100%;text-align: center;">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  Email already in use. Please Try Again.
	</div>
	
	
<?php $_SESSION['error'] = ''; endif; ?>



<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header" style="padding: 50px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
		
		
        <form action="../private/login.php" method="post">

		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  </div>

		  <button type="submit" class="btn btn-primary" name="submit">Login</button>

		</form>
      </div>
    </div>
  </div>
</div>

<!-- Signup Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" >
      <div class="modal-header" style="padding: 50px;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign Up</h4>
      </div>
      <div class="modal-body">
		
		
        <form action="../private/create_user.php" method="post">

		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
		  </div>

		  <div class="form-group">
		    <label for="name">Your Name</label>
		    <input type="text" class="form-control" id="name" placeholder="Name" name="name">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		  </div>

		  <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>

		</form>
      </div>
    </div>
  </div>
</div>

<section id="popular">
	<div class="container">
		<h2>Popular Events</h2>
		<div class="row">
			<div class="col-lg-4 card" style="margin-left: 0%;">
				<img src="img/event1.jpg" alt="Laracon" class="img-responsive">
				<div class="content">
					<h3>Laracon</h3>
					<h5>30-31 Feb</h5>
					<span class="like"><i class="fa fa-heart"></i></span>
				</div>
			</div>

			<div class="col-lg-4 card">
				<img src="img/event2.jpg" alt="The House Party" class="img-responsive">
				<div class="content">
					<h3>House Party</h3>
					<h5>30-31 Feb</h5>
					<span class="like"><i class="fa fa-heart"></i></span>
				</div>
			</div>

			<div class="col-lg-4 card" style="margin-bottom: 60px;">
				<img src="img/event3.jpg" alt="App Launch" class="img-responsive">
				<div class="content">
					<h3>App Launch</h3>
					<h5>30-31 Feb</h5>
					<span class="like"><i class="fa fa-heart"></i></span>
				</div>
			</div>

			<div class="more center" style="margin-top: 60px; margin-bottom: 60px;">
				<p><a href="#" style="color: #9baec8;">show more >> </a></p>
			</div>

		</div>
	</div>
</section>

<section class="features">
	<div class="container">
		<h2>Make this weekend the best !</h2>
		<div class="row">
			<div class="col-lg-3 feature">
				<img src="img/comedy.png" alt="comedy" class="icon">
				<h4>Stand Up Comedy</h4>
			</div>

			<div class="col-lg-3 feature">
				<img src="img/gaming.png" alt="comedy" class="icon">
				<h4>Meet Fellow Gamers</h4>
			</div>

			<div class="col-lg-3 feature">
				<img src="img/rap.png" alt="comedy" class="icon">
				<h4>Found Fellow rappers</h4>
			</div>

			<div class="col-lg-3 feature">
				<img src="img/programming.png" alt="comedy" class="icon">
				<h4>Join hackathons in city</h4>
			</div>
		</div>
		
	</div>
</section>

<?php include('../private/layouts/footer.php'); ?>