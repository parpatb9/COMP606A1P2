<?php include('header.php'); ?>

	<div class="jumbotron">
		
		<h1 align="center">Book Appointment</h1>
	</div>
		
		<div class="row">
			<div class="col-lg-6">
				
				<h3 style="margin-top: 10px;">Type of massage</h3>
				<h3 style="margin-top: 10px;">select date</h3>
				<h3 style="margin-top: 10px;">Select time slot</h3>


			</div>

			<div class="col-lg-6">
				<select style="margin-top: 10px; text-align: left;" class="btn btn-primary btn-block">
				   
				  <option value="volvo">Volvo</option>
				  <option value="saab">Saab</option>
				  <option value="mercedes">Mercedes</option>
				  <option value="audi">Audi</option>
				</select> 


				<input type="date" name="date" style="margin-top: 10px;" class="btn btn-primary btn-block" >


				<select style=" margin-top: 10px; text-align: left;" class="btn btn-primary btn-block">
				   
					  <option value="t1">10:00 am - 10:30 am</option>
					  <option value="t2">11:00 am - 11:30 am</option>
					  <option value="t3">12:00 pm - 12:30 pm</option>
					  <option value="t4">1:00 pm - 1:30 pm</option>
				</select> 



				
			</div>


			
			

		</div>

		


		<div class="row">
			
			<div class="container" style="padding: 100px 400px;" >

				<input type="submit" name="bookFinal" value="Book now" class="btn btn-danger" style="width: 200px;" onclick="document.getElementById(#).action = #;>
			</div>
		
		</div>
	 	
	 	

<?php include('footer.php'); ?>