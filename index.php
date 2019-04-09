<?php include('header.php'); ?>

<!-- start of jumbotron-->
	<div class="jumbotron index" style="margin-bottom: 200px;">

		<div align="center">
			<h1>Assignment : Booking App</h1>
		</div>


		<a href="login.php" class="float-left btn btn-success" style="margin-right:10px;">Login</a>
		<a href="Signup.php" class="float-left btn btn-primary">Signup</a>
		<a href="adminlogin.php" class="float-right btn btn-info">Admin Login</a>

	</div>
<!-- end of jumbotron -->

<!-- Start of one row and four coloums -->

<div class="row">

	<!-- start of coloum first -->
	<div class="col-lg-3">
		<div class="card" >
			<div class="card-header">
		   		<h4 style="font-size: 21px;"> Sports Massage</h4> <br>
		    	<a href="book.php" class="btn btn-danger btn-block" style="margin-top: 20px;">Book Now</a>
		  	</div>
		 <div class="card-body">
		  	Event preparation is important and regular sports massage should be part of your training regime
		 </div>
		</div>
	</div>
<!-- end of first coloum -->

<!-- start of second coloum -->

	<div class="col-lg-3">
		<div class="card">
			<div class="card-header">
		   		<h4 style="font-size: 21px;"> Deep Tissue Massage</h4>
		    	<a href="book.php" class="btn btn-danger btn-block" style="margin-top:20px;">Book Now</a>
		  	</div>
		  	<div class="card-body">
		  		Gone too hard and need massage that really gets to the root of the issue – try deep tissue massage
		  	</div>
		</div>
	</div>

<!-- end of second coloum -->

<!-- start of third coloum -->


	<div class="col-lg-3">
		<div class="card" >
		 	<div class="card-header">
		   		<h4 style="font-size: 21px;">Therapeutic Massage</h4><br>
		    	<a href="book.php" class="btn btn-danger btn-block" style="margin-top: 20px;">Book Now</a>
		  	</div>
		  	<div class="card-body">
		  	Just feeling stiff and need some of that muscle tension released then you need therapeutic massage
		  	</div>
		</div>
	</div>

<!-- end of third coloum -->

<!-- Start of fourth coloum -->

	<div class="col-lg-3">
		<div class="card">
		 	<div class="card-header">
		   		<h4 style="font-size: 22px;">Relaxation Massage</h4><br>
		    	<a href="book.php" class="btn btn-danger btn-block" style="margin-top: 20px;">Book Now</a>
		  	</div>
		  	<div class="card-body">
		  		Sometimes you just want to chill out, book a relaxation massage at MuscleWorx
		  	</div>
		</div>
	</div>

	<!-- end of fourth coloum -->

</div>
<!-- end of row -->




<?php include('footer.php'); ?>
