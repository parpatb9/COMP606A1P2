<?php include('header.php'); ?>
<?php include('function.php'); ?>
<div class="jumbotron">
  <h1 align="center">Welcome to Admin Dashboard</h1>
  <a href="logout.php" class="btn btn-primary float-left">Logout</a>
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
