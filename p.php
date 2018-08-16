<!doctype html>
<html lang="en">
 <head>
 <?php session_start();  ?>
 <?php include('function.php'); ?>

 </head>
 <body>
  <div class="reg_page">
  <div class="form">
    <form method="post">
	<H1>REGISTRATION</H1>
      <table>
			<tr>
				<td id="td">Name</td>
				<td><input type="text" name="name" size="50" placeholder="enter your name" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" required></td>
			</tr>
			<tr>
				<td id="td">Age</td>
				<td><input type="text" name="age" placeholder="enter your age" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" required></td>
			</tr>
			<tr>
				<td id="td">Blood Group</td>
			    <td><select name="bg"  onchange="if(this.value=='select'){alert('select a valid option')">
							<option value="select">select</option>
							<option value="A+">A +ve</option>
							<option value="B+">B +ve</option>
							<option value="AB+">AB +ve</option>
							<option value="O+">O +ve</option>
							<option value="A-">A -ve</option>
							<option value="B-">B -ve</option>
							<option value="AB-">AB -ve</option>
							<option value="O-">O -ve</option>
						</select></td>
			</tr>
			<tr>
				<td id="td">Contact number</td>
				<td><input type="text" name="phone" placeholder="enter your mobile number" required></td>
			</tr>
			<tr>
				<td id="td">E-mail</td>
				<td><input type="text" name="email" placeholder="enter your email" pattern="/[a-z]+\@[a-z]+\.[com|co\.in|co\.us|co\.jp]" required></td>
			</tr>
			<tr>
				<td id="td">Password</td>
				<td><input type="text" name="password" placeholder="enter your password" required></td>
			</tr>
			
            <tr>
				<td id="td">Your Location</td> 
				<td><select name="location" value="" style="width:230" >
						<option value="select">select</option>
						<option disabled="disabled" style="background-color:#ffffcc">
						<font color="#000000"><b>-Top Metropolitan Cities-</b>
						</font>
						</option>
						<option>Ahmedabad</option> 
						<option>Bengaluru/Bangalore</option>
						<option>Chandigarh</option>
						<option>Chennai</option>
						<option>Delhi</option>
						<option>Gurgaon</option>
						<option>Hyderabad/Secunderabad</option>
						<option>Kolkatta</option>
						<option>Mumbai</option>
						<option>Noida</option>
						<option>Pune</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Andhra Pradesh-</i></font>
						</option>
						<option>Anantapur</option>
						<option>Guntakal</option>
						<option>Guntur</option>
						<option>Hyderabad/Secunderabad</option>
						<option>kakinada</option>
						<option>kurnool</option>
						<option>Nellore</option>
						<option>Nizamabad</option>
						<option>Rajahmundry</option>
						<option>Tirupati</option>
						<option>Vijayawada</option>
						<option>Visakhapatnam</option>
						<option>Warangal</option>
						<option>Andra Pradesh-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Arunachal Pradesh-</i></font></option>
						<option>Itanagar</option>
						<option>Arunachal Pradesh-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Assam-</i></font></option>
						<option>Guwahati</option>
						<option>Silchar</option>
						<option>Assam-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Bihar-</i></font></option>
						<option>Bhagalpur</option>
						<option>Patna</option>
						<option>Bihar-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Chhattisgarh-</i></font></option>
						<option>Bhillai</option>
						<option>Bilaspur</option>
						<option>Raipur</option>
						<option>Chhattisgarh-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Goa-</i></font></option>
						<option>Panjim/Panaji</option>
						<option>Vasco Da Gama</option>
						<option>Goa-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Gujarat-</i></font></option>
						<option>Ahmedabad</option>
						<option>Anand</option>
						<option>Ankleshwar</option>
						<option>Bharuch</option>
						<option>Bhavnagar</option>
						<option>Bhuj</option>
						<option>Gandhinagar</option>
						<option>Gir</option>
						<option>Jamnagar</option>
						<option>Kandla</option>
						<option>Porbandar</option>
						<option>Rajkot</option>
						<option>Surat</option>
						<option>Vadodara/Baroda</option>
						<option>Valsad</option>
						<option>Vapi</option>
						<option>Gujarat-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Haryana-</i></font></option>
						<option>Ambala</option>
						<option>Chandigarh</option>
						<option>Faridabad</option>
						<option>Gurgaon</option>
						<option>Hisar</option>
						<option>Karnal</option>
						<option>Kurukshetra</option>
						<option>Panipat</option>
						<option>Rohtak</option>
						<option>Haryana-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Himachal Pradesh-</i></font></option>
						<option>Dalhousie</option>
						<option>Dharmasala</option>
						<option>Kulu/Manali</option>
						<option>Shimla</option>
						<option>Himachal Pradesh-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Jammu and Kashmir-</i></font></option>
						<option>Jammu</option>
						<option>Srinagar</option>
						<option>Jammu and Kashmir-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Jharkhand-</i></font></option>
						<option>Bokaro</option>
						<option>Dhanbad</option>
						<option>Jamshedpur</option>
						<option>Ranchi</option>
						<option>Jharkhand-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Karnataka-</i></font></option>
						<option>Bengaluru/Bangalore</option>
						<option>Belgaum</option>
						<option>Bellary</option>
						<option>Bidar</option>
						<option>Dharwad</option>
						<option>Gulbarga</option>
						<option>Hubli</option>
						<option>Kolar</option>
						<option>Mangalore</option>
						<option>Mysoru/Mysore</option>
						<option>Karnataka-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Kerala-</i></font></option>
						<option>Calicut</option>
						<option>Cochin</option>
						<option>Ernakulam</option>
						<option>Kannur</option>
						<option>Kochi</option>
						<option>Kollam</option>
						<option>Kottayam</option>
						<option>Kozhikode</option>
						<option>Palakkad</option>
						<option>Palghat</option>
						<option>Thrissur</option>
						<option>Trivandrum</option>
						<option>Kerela-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Madhya Pradesh-</i></font></option>
						<option>Bhopal</option>
						<option>Gwalior</option>
						<option>Indore</option>
						<option>Jabalpur</option>
						<option>Ujjain</option>
						<option>Madhya Pradesh-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Maharashtra-</i></font></option>
						<option>Ahmednagar</option>
						<option>Aurangabad</option>
						<option>Jalgaon</option>
						<option>Kolhapur</option>
						<option>Mumbai</option>
						<option>Mumbai Suburbs</option>
						<option>Nagpur</option>
						<option>Nasik</option>
						<option>Navi Mumbai</option>
						<option>Pune</option>
						<option>Solapur</option>
						<option>Maharashtra-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Manipur-</i></font></option>
						<option>Imphal</option>
						<option>Manipur-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Meghalaya-</i></font></option>
						<option>Shillong</option>
						<option>Meghalaya-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Mizoram-</i></font></option>
						<option>Aizawal</option>
						<option>Mizoram-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Nagaland-</i></font></option>
						<option>Dimapur</option>
						<option>Nagaland-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Orissa-</i></font></option>
						<option>Bhubaneshwar</option>
						<option>Cuttak</option>
						<option>Paradeep</option>
						<option>Puri</option>
						<option>Rourkela</option>
						<option>Orissa-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Punjab-</i></font></option>
						<option>Amritsar</option>
						<option>Bathinda</option>
						<option>Chandigarh</option>
						<option>Jalandhar</option>
						<option>Ludhiana</option>
						<option>Mohali</option>
						<option>Pathankot</option>
						<option>Patiala</option>
						<option>Punjab-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Rajasthan-</i></font></option>
						<option>Ajmer</option>
						<option>Jaipur</option>
						<option>Jaisalmer</option>
						<option>Jodhpur</option>
						<option>Kota</option>
						<option>Udaipur</option>
						<option>Rajasthan-Other</option>
						<option disabled="disabled" style="background-color:rgb(235,43,43)">
							<font color="rgb(255,255,255)"><i>-Sikkim-</i></font></option>
						<option>Gangtok</option>
						<option>Sikkim-Other</option>
						<option disabled="disabled" style="background-color:rgb(235,43,43)">
							<font color="rgb(255,255,255)"><i>-Tamil Nadu-</i></font></option>
						<option>Chennai</option>
						<option>Coimbatore</option>
						<option>Cuddalore</option>
						<option>Erode</option>
						<option>Hosur</option>
						<option>Madurai</option>
						<option>Nagerkoil</option>
						<option>Ooty</option>
						<option>Salem</option>
						<option>Thanjavur</option>
						<option>Tirunalveli</option>
						<option>Trichy</option>
						<option>Tuticorin</option>
						<option>Vellore</option>
						<option>Tamil Nadu-Other</option>
						<option disabled="disabled" style="background-color:rgb(235,43,43)">
							<font color="rgb(255,255,255)"><i>-Tripura-</i></font></option>
						<option>Agartala</option>
						<option>Tripura-Other</option>
						<option disabled="disabled" style="background-color:rgb(235,43,43)">
							<font color="rgb(255,255,255)"><i>-Union Territories-</i></font></option>
						<option>Chandigarh</option>
						<option>Dadra & Nagar Haveli-Silvassa</option>
						<option>Daman & Diu</option>
						<option>Delhi</option>
						<option>Pondichery</option>
						<option disabled="disabled" style="background-color:rgb(235,43,43)">
							<font color="rgb(255,255,255)"><i>-Uttar Pradesh-</i></font></option>
						<option>Agra</option>
						<option>Aligarh</option>
						<option>Allahabad</option>
						<option>Bareilly</option>
						<option>Faizabad</option>
						<option>Ghaziabad</option>
						<option>Gorakhpur</option>
						<option>Kanpur</option>
						<option>Lucknow</option>
						<option>Mathura</option>
						<option>Meerut</option>
						<option>Moradabad</option>
						<option>Noida</option>
						<option>Varanasi/Banaras</option>
						<option>Uttar Pradesh-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Uttaranchal-</i></font></option>
						<option>Dehradun</option>
						<option>Roorkee</option>
						<option>Uttaranchal-Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-West Bengal-</i></font></option>
						<option>Asansol</option>
						<option>Durgapur</option>
						<option>Haldia</option>
						<option>Kharagpur</option>
						<option>Kolkatta</option>
						<option>Siliguri</option>
						<option>West Bengal - Other</option>
						<option disabled="disabled" style="background-color:#ccffff">
							<font color="rgb(255,255,255)"><i>-Other-</i></font></option>
						<option>Other</option>
						</select></td>
			</tr>
			<tr>
				<td id="td">Gender</td>
				<td><select name="gender">
							<option value="select">select</option>
							<option value="male">MALE</option>
							<option value="female">FEMALE</option>
							<option value="other">OTHERS</option>							
						</select></td>
                
			</tr>
            <tr>
				<td id="td">LAST DONATION DATE</td>
				<td><input type="date" name="dd" </td>
                
			</tr>
			<tr>
				<td></td><td><button  name="insert" value="submit">REGISTER</BUTTON></td>
			</tr>
		</table>
		
    </form>
    <a href="home.html">HOME</a><a href="LOGIN1.PHP">LOGIN</a>
  </div>
</div>

</body>
</html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="donors";
$name="";	
$bg = "";
$phone="";
$email="";
$location="";
$gender="";
$health="";
$smoke="";
$drink="";
$s="";
$r="";
$count="0";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
	$conn =mysqli_connect($servername,$username,$password,$dbname);
}catch(MySQLi_Sql_Exception $ex){
	echo("error in connecting");
}
function getData()
{
	$data = array();
	$data[0]=$_POST['name'];
	$data[1]=$_POST['age'];
	$data[2]=$_POST['bg']; 
	$data[3]=$_POST['phone'];
	$data[4]=$_POST['email'];
	$data[5]=$_POST['password'];
	$data[6]=$_POST['location'];
	$data[7]=$_POST['gender'];	
	$data[8]=$_POST['dd'];

	return $data;
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['insert'])) 
{
	$info = getData();
	$name=test_input($_POST["name"]);
	 $email = test_input($_POST["email"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
		{
      echo "<script>alert('Only letters and white space allowed')</script>";
	  $count++;
	  
    }
	 if(!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
     echo "<script>alert('Email is invalid')</script>";
	 $count++;
	 
    }
    if((string)$_POST['age']<="18" and (string) $_POST['age']>="60")
		{
					echo"<script>alert('age should be between 18 to 60')</script>";
					 $count++;
					
		}
	 if(!preg_match("/^[6-9][0-9]*$/",$_POST['phone']))

	{
			echo"<script>alert(' invalid mobile number ')</script>";
			 $count++;
			 if( strlen((string) $_POST['phone'])!=10)
				 echo"<script>alert('mobile number should consist of 10 digits')</script>";
			
	}
	if($count==0)
	{
		$s="select * from reg where email='$info[4]'";
		$q=mysqli_query($conn,$s);
		$r=mysqli_num_rows($q);
		if($r>0)
		{
		echo"<script>alert('username already exist')</script>";
		}
		else{
			if(isset($_POST['insert'])){
	$info = getData();
	
	$insert_query="INSERT INTO `reg` (`name`, `age`, `bg`, `phone`,`email`,`password`, `location`,`gender`,`dd`) VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]','$info[7]','$info[8]')";
	try{
		$insert_result=mysqli_query($conn, $insert_query);
		if($insert_result)
		{
			if(mysqli_affected_rows($conn)>0){
				 echo "<script>
                        alert ('registered Successfully...!');
                    </script>";
				
			}else{ echo "<script>
                        alert ('error in registration..!');
                    </script>";
			}
		}
	}catch(Exception $ex){
		echo("error inserted".$ex->getMessage());
	}
}

			
			
			
			}
	}
	else
	{
		echo"<script>alert('you are not registered....please try again')</script>";
	}
}
?>

