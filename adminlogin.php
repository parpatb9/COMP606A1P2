<?php include('header.php'); ?>
<?php
session_start();
if(isset($_SESSION['aid']))
{
	?>
	<script type="text/javascript">
		window.open('admindashboard.php','_self');
	</script>
	<?php
}
?>

<div class="row" >


<!-- first coloumn -->
	<div class="col-lg-3">

	</div>

<!-- Admin Login section -->
	<div class="col-lg-6" >
		<div class="container formAllignment" >
			<div class="jumbotron" style="background-color: rgba(51,51,51,0.9);">

				<form action="adminlogin.php" method="post">
					<div align="center">
						<legend> Admin Login Form</legend>

					</div>

					<div class="form-group">
						<label for="a_name">Username :</label>
						<input type="text" id="a_name" name="a_name" required class="form-control">
					</div>
					<div class="form-group">
						<label for="a_pass">Password :</label>
						<input type="password" id="a_pass" name="a_pass" required class="form-control">
					</div>
					<div class="form-group" style="margin-top: 50px;">
						<input type="submit" name="submit1" value="Login" class="btn btn-danger form-control">
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
<?php
if(isset($_POST['submit1']))
{
	include('dbcon.php');
	$uname=mysqli_real_escape_string($con,$_POST['a_name']);
	$password=md5($_POST['a_pass']);


	$sql = "SELECT * FROM `admin` WHERE `uname`='$uname' AND `pass`='$password'";


	$run = mysqli_query($con,$sql);
	$data = mysqli_fetch_assoc($run);
	if(mysqli_num_rows($run)>0)
	{

		$_SESSION['aid']=$data['aid'];
		?>
		<script type="text/javascript">
			window.open('admindashboard.php','_self');
		</script>
		<?php
	}
	else {
		?>
		<script type="text/javascript">
			window.open('adminlogin.php?ss=0','_self');
		</script>
		<?php
	}
}


?>
