<?php include('header.php'); ?>
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
<?php include('function.php'); ?>

	<div class="jumbotron index">
		<h1 align="center">View Appointments</h1>
		<a href="dashboard.php" class="btn btn-primary float-left">Back</a>
	</div>



   <!-- For headings
                                -->
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
      		<?php getApList($_SESSION['uid']); ?>



   		 </tbody>
  		</table>



<?php include('footer.php'); ?>
