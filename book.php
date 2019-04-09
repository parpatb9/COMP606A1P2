<?php include('header.php'); ?>

	<div class="jumbotron i2">
		<h1 align="center">Book Appointment</h1>
	</div>
		
		<!-- r1 class given to row with two coloumns -->

	<div class="row r1" >
		<div class="col-lg-6 c1" >
				
			<h3 style="margin-top: 10px;">Type of massage :</h3>
			<h3 style="margin-top: 10px;">select date :</h3>
			<h3 style="margin-top: 10px;">Select time slot :</h3>
			<h3 style="margin-top: 10px;">Write something about you :</h3>

		</div>

<!-- data insert methods -->

		<div class="col-lg-6" style="float: right; margin-left: 10px;">

		<!-- dropdown menu for massage selection -->
			<select style="margin-top: 10px; text-align: left; width: 615px; " class="btn btn-primary btn-block" required>
				   
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
				<option value="audi">Audi</option>
			</select> 

		
		<!-- To pick the date -->
			<input type="date" name="date" style="margin-top: 10px; width: 615px;" class="btn btn-primary btn-block" required>


		<!-- To select time slot -->

			<select style=" margin-top: 10px; width: 615px; text-align: left;" class="btn btn-primary btn-block" required>
				   
				<option value="t1">10:00 am - 10:30 am</option>
				<option value="t2">11:00 am - 11:30 am</option>
				<option value="t3">12:00 pm - 12:30 pm</option>
				<option value="t4">1:00 pm - 1:30 pm</option>
			</select> 


		<!-- its for comment -->


			<textarea name="comment"  style=" margin-top: 10px; text-align: left; width: 615px; height: 100px; background-color: rgba(255,255,255,0.7);" placeholder="e.g Recovery from injury, Any depression, etc."></textarea>



				
		</div>		

	</div>

		

<!-- this row taken for button -->

	<div class="row " >
			
		<div  style="padding: 100px 400px; background-blend-mode: darken;">

			<input type="submit" name="bookFinal" value="Book now" class="btn btn-danger" style="width: 200px;" onclick="document.getElementById(#).action = #;">
		</div>
		
	</div>
	 	
	 	

<?php include('footer.php'); ?>