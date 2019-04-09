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
						<?php
								if(isset($_GET['ss']))
								 {
									 if($_GET['ss']==0)
									 {
										 echo "<legend> Unable To Register User , Please Try Again.</legend>";
									 }
								 }
						 ?>
						<legend>Registration Form</legend>
					</div>

					<div class="form-group" style="margin-top: 10px;">
					    <label for="fname">First name:</label>
					    <input type="text" class="form-control" id="fname" name="fname" required>
		  			</div>

		  			<div class="form-group" style="margin-top: 10px;">
					    <label for="lname">Last Name:</label>
					    <input type="text" class="form-control" id="lname" name="lname" required>
		  			</div>

		  			<div class="form-group" style="margin-top: 10px;">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" id="email" name="email" required>
		  			</div>

		  			<div class="form-group" style="margin-top: 10px;">
					    <label for="pass">Password:</label>
					    <input type="password" class="form-control" id="pass" name="pass" required>
		  			</div>

					 <div class="form-group" >
		  				<input type="submit" name="signup" value="Signup" class="btn btn-danger form-control" style="margin-top: 20px; ">
		  			 <div>
				</form>
			</div>
		</div>

	</div>


</div>

<?php include('footer.php'); ?>
<?php
if(isset($_POST['signup']))
{
	include('dbcon.php');
	$fname=mysqli_real_escape_string($con,$_POST['fname']);
	$lname=mysqli_real_escape_string($con,$_POST['lname']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=md5($_POST['pass']);


	$sql = "INSERT INTO `users` (`uid`, `fname`, `lname`, `email`, `password`)
					VALUES (NULL, '$fname', '$lname', '$email', '$password');";
				
	$run = mysqli_query($con,$sql);

	if($run)
	{
		?>
		<script type="text/javascript">
			window.open('login.php?ss=1','_self');
		</script>
		<?php
	}
	else {
		?>
		<script type="text/javascript">
			window.open('signup.php?ss=0','_self');
		</script>
		<?php
	}
}


?>
