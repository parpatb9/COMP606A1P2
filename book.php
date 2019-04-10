<?php include('header.php'); ?>
<?php include('dbcon.php'); ?>
<?php
function getTimesloat()
{
  global $con;

  $sql = "SELECT * FROM `timeslot` ORDER BY `tid`";
  $run = mysqli_query($con,$sql);
  while($data = mysqli_fetch_assoc($run))
  {
    ?>
    <option value="<?php echo $data['tid']; ?>"><?php echo $data['timeslot']; ?></option>
    <?php
  }
}
function getMsgList()
{
  global $con;

  $sql = "SELECT * FROM `msgtype` ORDER BY `mid`";
  $run = mysqli_query($con,$sql);
  while($data = mysqli_fetch_assoc($run))
  {
    ?>
    <option value="<?php echo $data['mid']; ?>"><?php echo $data['name']; ?></option>
    <?php
  }
}
?>

	<div class="jumbotron i2">
		<h1 align="center">Book Appointment</h1>
		<a href="dashboard.php" class="btn btn-primary float-left">Back</a>
	</div>

	<div class="jumbotron" style="background-color:rgba(0,0,0,0.5);color:#fff;">
		<form class="" action="book.php" method="post">
			<div class="form-group">
				<?php
						if(isset($_GET['er']))
						 {
							 if($_GET['er']==1)
							 {
								 echo "<h2 style='    color: #fbff0e;text-shadow: 2px 2px 2px #190f04;'>
								 Appointment Slot is already taken.Pls choose another timeslot.</h2>";
							 }


						 }
				 ?>
				<legend>Book Appointment</legend>

			</div>
			<div class="form-group">
				<label for="tom">Type of massage :</label>
				<select class="form-control"  required id="tom" name="tom">
					<?php getMsgList(); ?>
				</select>
			</div>
			<div class="form-group">
				<label for="date">Data</label>
				<input type="date" name="date" class="form-control" id="date"  required>
			</div>
			<div class="form-group">
				<label for="ts">Time Slot</label>
				<select class="form-control" name="ts" id="ts"  required>
				<?php getTimesloat(); ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Write Motivation</label>
				<textarea name="comment" class="form-control"   placeholder="e.g Recovery from injury, Any depression, etc."></textarea>
			</div>
			<div class="form-group" align="center">
				<input type="submit" name="submit" value="Book" class="btn btn-success form-control">
			</div>
		</form>
	</div>
<?php include('footer.php'); ?>

<?php
if(isset($_POST['submit']))
{
	include('dbcon.php');
	$tom=mysqli_real_escape_string($con, $_POST['tom']);
	$ts= $_POST['ts'];
	$date=$_POST['date'];
	$msg=mysqli_real_escape_string($con, $_POST['comment']);
	session_start();
	$uid = $_SESSION['uid'];

	$check = "SELECT * FROM `appointments` WHERE `date`='$date' AND `timeslot`='$ts'";
	$runcheck = mysqli_query($con,$check);
	if(mysqli_num_rows($runcheck)>0)
	{
		?>
		<script type="text/javascript">
			window.open('book.php?er=1','_self');
		</script>
		<?php
	}
	else {
		$sql = "INSERT INTO `appointments` (`apid`, `msgtype`, `date`, `timeslot`, `comment`, `uid`)
												VALUES (NULL, '$tom', '$date', '$ts', '$msg', '$uid');";
		$run=mysqli_query($con,$sql);
		if($run)
		{
			?>
			<script type="text/javascript">
				alert('Success...');
			</script>
			<?php
		}
		else {
			?>
			<script type="text/javascript">
				alert('Error...');
			</script>
			<?php
		}

	}



}
?>
