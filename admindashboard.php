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
<div class="jumbotron">
  <h1 align="center">Welcome to Admin Dashboard</h1>
  <a href="logout1.php" class="btn btn-primary float-left">Logout</a>
</div>

<table class="table table-hover" style="background-color: rgba(255,255,255,0.5);">
  <thead>
      <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Dates</th>
        <th>Time</th>
        <th>Details</th>
      </tr>
  </thead>

  <!-- for Body and original data -->

<tbody>
    <?php getApListAll(); ?>



 </tbody>
</table>
