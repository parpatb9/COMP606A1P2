<?php include('header.php'); ?>
<?php include('function.php'); ?>

<?php
$apid = $_GET['apid'];
$data = getApDetail($apid)
?>
<div class="jumbotron">
  <h1 align="center">Appointment Details</h1>
  <a href="viewAppointment.php" class="btn btn-primary">Back</a>
</div>

<table class="table">
<tr>
  <th>Name</th>
  <td><?php echo $data[0]." ".$data[5]; ?></td>
</tr>
<tr>
  <th>Email</th>
  <td><?php echo $data[6]; ?></td>
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
<tr>
  <th>Cancel ??</th>
  <td> <a href="canapp.php?apid=<?php echo $apid;  ?>" class="btn btn-danger">Cancel</a> </td>
</tr>
</table>
