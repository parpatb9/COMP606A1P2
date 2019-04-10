<?php include('header.php'); ?>
<?php
session_start();
if(!isset($_SESSION['aid']))
{
	?>
	<script type="text/javascript">
		window.open('adminlogin.php','_self');
	</script>
	<?php
}
?>
<?php include('function.php'); ?>

<?php
$apid = $_GET['apid'];
$data = getApDetail($apid)
?>
<div class="jumbotron">
  <h1 align="center">Appointment Details</h1>
  <a href="admindashboard.php" class="btn btn-primary">Back</a>
</div>

<table class="table">
<tr>
  <th>Name</th>
  <td><?php echo $data[0]; ?></td>
</tr>
<tr>
  <th>Date</th>
  <td><?php echo $data[1]; ?></td>
</tr>
<tr>
  <th>Time Slot</th>
  <td><?php echo $data[2]; ?></td>
</tr>
<tr>
  <th>Type</th>
  <td><?php echo $data[3]; ?></td>
</tr>
<tr>
  <th>Comment</th>
  <td><?php echo $data[4]; ?></td>
</tr>

</table>
