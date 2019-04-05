<?php include('header.php'); ?>


<div class="row" >


<!-- first coloumn -->
	<div class="col-lg-3">
	
	</div>

<!-- Admin Login section -->
	<div class="col-lg-6" >
		<div class="container formAllignment" style="background-image: url('assets/img/1.jp');">
			<div class="jumbotron" >

				<form action="#" method="post">
					<div align="center">
						<legend> Admin Login Form</legend>

					</div>
			
					<div class="form-group">
						<label for="a_name">Username :</label>
						<input type="email" id="a_name" name="a_name" required class="form-control">
					</div>
					<div class="form-group">
						<label for="a_pass">Password :</label>
						<input type="password" id="a_pass" name="a_pass" required class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="submit1" value="Login" class="btn btn-success form-control">
					</div>
				</form>
			</div>
		</div>
	</div>


<!--  third coloum -->
	<div class="col-lg-3">
	
	</div>


</div>

<!-- end of row -->




<?php include('footer.php'); ?>