<?php include('header.php'); ?>

<div class="row">

	<!-- First and last coloums for alignment -->

	<div class="col-lg-3">
		
	</div>

<!-- Actual form in this coloumn -->

	<div class="col-lg-6">
		<div class="container formAllignment">
			<div class="jumbotron signup" style="background-color: rgba(51,51,51,0.9); padding-bottom: -10px;">
				<form action="#" method="post">

					<div align="center">
						<legend>Registration Form</legend>
					</div>
					
					<div class="form-group" style="margin-top: 10px;">
					    <label for="fname">First name:</label>
					    <input type="text" class="form-control" id="fname" required>
		  			</div>

		  			<div class="form-group" style="margin-top: 10px;">
					    <label for="lname">Last Name:</label>
					    <input type="text" class="form-control" id="lname" required>
		  			</div>

		  			<div class="form-group" style="margin-top: 10px;">
					    <label for="uname">Email address:</label>
					    <input type="email" class="form-control" id="uname" required>
		  			</div>

		  			<div class="form-group" style="margin-top: 10px;">
					    <label for="pass">Password:</label>
					    <input type="password" class="form-control" id="pass" required>
		  			</div>

					 <div class="form-group" >
		  				<input type="submit" name="signup" value="Signup" class="btn btn-danger form-control" style="margin-top: 20px; ">
		  			 <div>
				</form>
			</div>
		</div>
		
	</div>

	<div class="col-lg-3">
		

	</div>

</div>

<?php include('footer.php'); ?>