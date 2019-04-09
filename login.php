<?php include('header.php'); ?>


	<div class="row" >

<!-- first coloumn -->
		<div class="col-lg-3">

		</div>

<!-- Login section -->
		<div class="col-lg-6" >
			<div class="container formAllignment" >
				<div class="jumbotron" style="background-color: rgba(51,51,51,0.9);">

					<form action="#" method="post">
						<div align="center">
							<?php
									if(isset($_GET['ss']))
									 {
										 if($_GET['ss']==1)
										 {
											 echo "<legend> Registered Successfully.</legend>";
										 }
										 if($_GET['ss']==0)
										 {
											 echo "<legend style='color:orange;'> Wrong username or password.</legend>";
										 }

									 }
							 ?>
							<legend>Login Form</legend>
						</div>

						<div class="form-group">
							<label for="uname">Username :</label>
							<input type="email" id="uname" name="uname" required class="form-control" placeholder="Enter email id as username">
						</div>
						<div class="form-group">
							<label for="pass">Password :</label>
							<input type="password" id="pass" name="pass" required class="form-control" placeholder="Enter Password">
						</div>


						<div class="form-group" align="center">
							<input type="submit" name="submit" value="Login" class="btn btn-danger form-control"> <br>
							 <br> <a href="index.php" class="btn btn-success">Go To HomePage</a>
						</div>


					</form>
				</div>
			</div>
		</div>

<!-- end of Login section -->

</div>

<?php include('footer.php'); ?>

<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$uname=mysqli_real_escape_string($con,$_POST['uname']);
	$password=md5($_POST['pass']);


	$sql = "SELECT * FROM `users` WHERE `email`='$uname' AND `password`='$password'";


	$run = mysqli_query($con,$sql);
	$data = mysqli_fetch_assoc($run);
	if(mysqli_num_rows($run)>0)
	{
		session_start();
		$_SESSION['uid']=$data['uid'];
		?>
		<script type="text/javascript">
			window.open('dashboard.php','_self');
		</script>
		<?php
	}
	else {
		?>
		<script type="text/javascript">
			window.open('login.php?ss=0','_self');
		</script>
		<?php
	}
}


?>
