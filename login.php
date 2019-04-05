<?php include('header.php'); ?>


	<div class="row" >

<!-- first coloumn -->	
		<div class="col-lg-3">
	
		</div>

<!-- Login section -->
		<div class="col-lg-6" >
			<div class="container formAllignment" >
				<div class="jumbotron" >

					<form action="#" method="post">
						<div align="center">
							<legend>Login Form</legend>
						</div>
			
						<div class="form-group">
							<label for="uname">Username :</label>
							<input type="email" id="uname" name="uname" required class="form-control">
						</div>
						<div class="form-group">
							<label for="pass">Password :</label>
							<input type="password" id="pass" name="pass" required class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Login" class="btn btn-success form-control">
						</div>
					</form>
				</div>
			</div>
		</div>

<!-- end of Login section -->


<!--  third coloum -->
		<div class="col-lg-3">
	
		</div>
		

<!-- end of row -->
</div>






<?php include('footer.php'); ?>