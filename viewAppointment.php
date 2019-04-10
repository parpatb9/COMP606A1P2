<?php include('header.php'); ?>
<?php include('function.php'); ?>
<?php session_start(); ?>
	<div class="jumbotron index">
		<h1 align="center">View Appointments</h1>
		<a href="dashboard.php" class="btn btn-primary float-left">Back</a>
	</div>


	<div class="container" style="margin: 100px 0px;">

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
	</div>


<?php include('footer.php'); ?>
