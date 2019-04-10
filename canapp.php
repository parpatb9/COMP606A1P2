<?php
session_start();
if(!isset($_SESSION['uid']))
{
	?>
	<script type="text/javascript">
		window.open('login.php','_self');
	</script>
	<?php
}
?>
<?php
include('header.php');
$apid = $_GET['apid'];

include('dbcon.php');

$sql = "SELECT * FROM `appointments` WHERE `apid`='$apid'";
$run=mysqli_query($con,$sql);

$data = mysqli_fetch_assoc($run);
$apDate = $data['date'];
$today = date('Y-m-d');

$datetime1 = new DateTime($apDate);
$datetime2 = new DateTime($today);
$interval = $datetime1->diff($datetime2);
$countday = $interval->format('%d');

if($countday>1)
{
  $DeleteQuery = "DELETE FROM `appointments` WHERE `apid`='$apid'";
  $runDelete = mysqli_query($con,$DeleteQuery);

  if($runDelete)
  {
      ?>
      <script type="text/javascript">
        window.open('viewAppointment.php','_self');
      </script>
      <?php
  }
}
else {
?>
<div class="" style="color:'red';">
  <div class="jumbotron" align="center">
    <h3>You are canceling appointment in lessthan 24 hours of your schedule appointment time. </h3>
    <h3>So from your refund the late cancellation fees will be deducted.</h3>
    <h3>Are you sure want to cancel this Appointment ??</h3>
    <a href="confirmcan.php?apid=<?php echo $apid; ?>" class="btn btn-danger">Yes</a>
    <a href="viewAppointment.php" class="btn btn-success">No</a>
  </div>

</div>

<?php
}
?>
