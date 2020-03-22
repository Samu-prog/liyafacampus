<!DOCTYPE html>
<html>
<head>
	<title>tenant registration page</title>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<script src="css/bootstrap-theme.min.css"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div  class="col-sm-12">
				<center>
					<h2>Please Re-enter your details to complete your requet of student off campus accommdation proccess!! </h2>
					<form method ="POST" action ="" style="margin-top: 20px; border: 1px solid green; border-width: 50px; border-radius: 20px; margin-bottom: 30px;">
						<table>
							<tr>
							    <td> FIRSTNAME:</td>
							    <td><input type = "text" name = "firstname" placeholder="firstname" class="form-control"></td>
							</tr>


							 <tr><td> LASTNAME: </td>
							    <td><input type = "text" name ="lastname" placeholder="lastname" class="form-control"></td>
							</tr>
							
							 <tr> 
								<td>MARITALSTATUS: </td>
								<td>Single <input type = "radio" value= "Single" name = "maritalstatus"/>
								Married <input type = "radio" value= "Married" name = "maritalstatus"/>
								</td>
							</tr>
							
							<tr>
							    <td>GENDER:</td>
							<td>
								Male<input type = "radio" value= "Male" name = "gender" />
							    Female <input type = "radio" value= "Female" name = "gender"/>
							</td>
							</tr>

							<tr>
								<td>DATE OF BIRTH:</td>
								<td><input type="text" name="DateOfBirth" value="Date" class="form-control"></td>
							</tr>

							<tr><td> EMAIL ADDRESS: </td>
							    <td><input type = "text" name ="emailAdd"  placeholder = "email address" class="form-control" /></td>
							</tr> 
							<tr>
								<td>STATE OF ORIGIN</td>
									<td><select input type="State" class="form-control" name="state" placeholder="State of origin">
										<option>Abia-Umuahia </option>
										<option>Adamawa-Yola</option>
										<option>Akwa Ibom-Uyo </option>
										<option>Anambra-Awkwa </option>
										<option>Bauchi-Bauchi </option>
										<option>Bayelsa-Yenagoa</option>
										<option>Benue-Makurdi </option>
										<option>Borno-Malduguri </option>
										<option>Cross River-calabar </option>
										<option>Delta-Asaba </option>
										<option>Ebonyi-Abakaliki</option>
										<option>Edo-benin City </option>
										<option>Ekiti-Ado-Ekiti </option>
										<option>Enugu-Enugu </option>
										<option>FCT-Abuja </option>
										<option>Gombe-Gombe </option>
										<option>Imo-Owerri</option>
										<option>Jigawa-Dutse </option>
										<option>Kaduna-Kaduna </option>
										<option>Kano-Kano </option>
										<option>Katsina-Katsina </option>
										<option>Kebbi-birnin Kebbi</option>b
										<option>Kogi-Lokoja </option>
										<option>kwara-Ilorin</option>
										<option>Lagos-Ikeja </option>
										<option>Nasarawa-Lafia </option>
										<option>Niger-Minna</option>
										<option>Ogun-Abeokuta </option>
										<option>Ondo-Akure </option>
										<option>Osun-Oshogbo </option>
										<option>Oyo-Ibadan </option>
										<option>Plateau-Jos </option>
										<option>Rivers-Port-harcourt </option>
										<option>Sokoto-Sokoto </option>
										<option>Taraba-Jalingo </option>
										<option>Yobe-Damaturu</option>
										<option>Zafara-Gusau </option>
									</select>
							</tr> 
							<tr>
								<td> L.G.A</td>
								<td><input type="text" class="form-control" name="lga" placeholder="Enter L.G.A"></td>
							</tr> 

							 <tr>
							 	<td>PHONE NUMBER: </td>
							    <td><input type ="number" name ="phoneNumber" required placeholder = "phone number" class="form-control" /></td>
							</tr>

							<tr>
								<td>ROOM CHOICE:</td>
							    <td>
							    	single<input type = "radio" name ="room_choice" value="single">
							        self-contained <input type = "radio" name ="room_choice" value="Self-contained">
							    </td>
							</tr>

							<tr><td>RENT PERIOD:</td>
							    <td>
							    	yearly<input type = "radio" name ="rent_period" value="yearly">
							        Monthly<input type = "radio" name ="rent_period" value="Monthly"> 
							    </td>

							</tr>

							<tr><td> RESIDENTIAL ADDRESS: </td>
							    <td><textarea name ="homeAdd" cols ="30" rows = "2" required> </textarea></td>
							   
							</tr>
							<tr>
							   <td><input type = "submit" name = "submit" value = "submit" class="form-control"> </td>
							   <td><input type = "reset" name = "reset" value = "reset" class="form-control"> </td>
							   <tr>
							   	  <td><a href="viewtenant.php" style="font-size: 20px; text-decoration: none;;" class="btn btn-primary" >VIEW  tenant</a></td>
							   	   <td><a href="index.html" class="btn btn-warning">Back</a></td> 
							   </tr>
							    
							
					   </table>	
				    </form>
				</center>
		    </div>
		</div>
	</div>	

	    <?php
		$_server = "localhost";
		$_database ="campus";
		$_user ="root";
		$_pass = "";

		if ($_POST['submit']!= null){
		   $con4 = mysql_connect("localhost","root","");
		   mysql_select_db("campus", $con4);


			//create table studentoff (firstname varchar (60), lastname varchar (60), maritalstatus varchar (60), gender varchar (60), DateOfBirth varchar (60), emailAdd varchar (60), state varchar (60), lga varchar (60), phoneNumber varchar (60), room_choice varchar (60), rent_period varchar (60), homeAdd varchar (60));
		  
		   $sql = "insert into studentoff(firstname, lastname, maritalstatus, gender, DateOfBirth, emailAdd, state, lga, phoneNumber, room_choice, rent_period, homeAdd)
		  
		                            values
		   ('$_POST[firstname]','$_POST[lastname]',  '$_POST[maritalstatus]', '$_POST[gender]','$_POST[DateOfBirth]',  '$_POST[emailAdd]',  '$_POST[state]', '$_POST[lga]', '$_POST[phoneNumber]', '$_POST[room_choice]', '$_POST[rent_period]', '$_POST[homeAdd]')";
		   

		   if(mysql_query($sql, $con4)){
		       
		        echo  "Congratulations,"  .$_POST["firstname"];
		         echo "You have successfully reegistered!!!";

		   }else{
		       echo "Error...Cannot update database: Try again!!!";
		       }
		   }
		   ?>   
		<?php
		echo date("Y/m/d");
		?>
     <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>		
</body>
</html>