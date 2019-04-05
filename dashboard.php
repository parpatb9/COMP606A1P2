<?php include('header.php'); ?>




<div class="container dashboard">

	<div class="jumbotron">
		<h2 align="center" style="text-align: center">Dashboard</h2>
	</div>
  
                               
  <table class="table table-hover">
    <!-- <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
      </tr>
    </thead> -->
    <tbody>
      <tr>
        <td>Book Apointment</td>
        <td><button name="book" class="btn btn-danger  btn-block" onclick="window.open('book.php','_self');">Book  </button></td>
      </tr>
      <tr>
        <td>View your Appointment</td>
        <td><button name="view" class="btn btn-danger btn-block" onclick="window.open('viewAppointment.php','_self');">View  </button></td>
      </tr>
      <tr>
        <td>Cancel your Appointment</td>
        <td><button name="cancel" class="btn btn-danger btn-block" onclick="window.open('cancelAppointment.php','_self');">Cancle</button></td>
      </tr>
    </tbody>
  </table>
</div>





<?php include('footer.php'); ?>


