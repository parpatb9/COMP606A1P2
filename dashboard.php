<?php include('header.php'); ?>


<!-- class dahsboard given to container -->

<div class="container dashboard">

<!-- jumboron -->
  <div class="jumbotron index">
		  <h2 align="center" style="text-align: center">Dashboard</h2>
	</div>
  
<!-- Table Start   -->
  <table class="table table-hover" style="background-color: rgba(255,255,255,0.5);">
   
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
        <td><button name="cancel" class="btn btn-danger btn-block" onclick="window.open('cancleAppointment.php','_self');">Cancle</button></td>
      </tr>

    </tbody>

  </table>
<!-- table end -->

</div>
<!-- dashboard container end -->





<?php include('footer.php'); ?>


