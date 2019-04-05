<?php include('header.php'); ?>

	<div class="jumbotron index">
		<h1 align="center">View Appointments</h1>
	</div>


	<div class="container" style="margin: 100px 0px;">
   
   <!-- For headings
                                -->
  		<table class="table table-hover" style="background-color: rgba(255,255,255,0.5);">
   			<thead style="font-size: 26px;">
      			<tr>
        			<th>No.</th>
        			<th>All dates</th>
        			<th>Time</th>
       			 	<th>Status</th>
        			<th>Details</th>
      			</tr>
    		</thead>

    		<!-- for Body and original data -->

    	<tbody style="font-size: 20px;">
      		<tr>
        		<td>1</td>
        		<td>11/3/29</td>
        		<td>10:30 am - 11:00 am</td>
        		<td>confirm</td>
        		<td><a href="#" class="btn btn-primary">Details</a></td>
      		</tr>

     		<tr>
         		<td>2</td>
		        <td>12/3/29</td>
		        <td>10:30 am - 11:00 am</td>
		        <td>confirm</td>
		        <td><a href="#" class="btn btn-primary">Details</a></td>
      		</tr>
     
   		 </tbody>
  		</table>
	</div>


<?php include('footer.php'); ?>