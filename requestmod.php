<!DOCTYPE html>
<html>
<head>
   <title>Online Blood Bank-Request for donor</title>
   <?php session_start();  ?>
 <?php include('function.php'); ?>
 <style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.req_page {
  width: 700px;
  padding: 4% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: white;
  max-width: 550px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.form input,textarea,select {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 5;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form input:focus, textarea:focus {
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
}
.form select:focus {
  box-shadow: 0 0 5px rgba(81, 203, 238, 1);
  padding: 3px 0px 3px 3px;
  margin: 5px 1px 3px 0px;
  border: 1px solid rgba(81, 203, 238, 1);
}

.form select {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  COLOR:GREY;
}
.form td{
  font-family: "Roboto", sans-serif;
	font-weight:bold;
}

.form button{
  font-family: "Roboto", sans-serif;
  text-transform :uppercase;
  outline: 0;
  background: -webkit-linear-gradient(right,#e494a2,#cc89d3);
  background: -moz-linear-gradient(right, #e494a2,#cc89d3);
  background: -o-linear-gradient(right,#e494a2,#cc89d3);
  background: linear-gradient(to left,#e494a2,#cc89d3);
	width: 100%;
  border: 0;
  padding: 15px;
  color:white;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
   border-radius: 25px;
}
.form button:hover,.form button:active,.form button:focus {
   background: radial-gradient(#ff00cc,#ff66cc,#ff0099);
  COLOR:BLACK;
  FONT-WEIGHT:BOLD;
  FONT-SIZE:15PX;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
 
body {
  background:#ffffff; /* fallback for old browsers */
  background: -webkit-linear-gradient(right,#faa5b6,#c69dc1);
  background: -moz-linear-gradient(right, #faa5b6,#c69dc1);
  background: -o-linear-gradient(right,#faa5b6,#c69dc1);
  background: linear-gradient(to left,#faa5b6,#c69dc1);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;  
      
}

</style>
</head>
<body>
   <div class="reg_page">
  <div class="form">
        <form method="post">
      <center>
           <h1>NEED A DONOR</H1>
			<table>
			<tr>
               <td>Name</td>
                <td><input type="text"  name="name" placeholder="Your name here" size="50"  style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif"></td>
			</tr>
			<tr>
                <td>Blood Group</td>
				<td><select name="bg">
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
                    <td>Contact number</td>
                    <td><input type="text" name="phone"></td>
			</tr>
			<tr>
					<td>Address</td>
                    <td><textarea rows="4" cols="50" name="address"></textarea></td>
			</tr>
			<tr>
                    <td><font color="#FF0000" size="+2"></font>Your Location</td>
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
				<tr>
				<td>Till date</td>
				<td><input type="date" name="date"></td>
				</tr>
				<tr>
				<td>Gender</td>
				<td><select name="gender">
							<option value="select">SELECT</option>
							<option value="male">MALE</option>
							<option value="female">FEMALE</option>
							<option value="other">OTHERS</option>							
						</select></td>
				</tr>
				<tr>
				<td></td>
				<td><button type="submit" name="insert" value="REQUEST">REQUEST</button></TD>
				</TR>
</TABLE>
    </center>
    </form>
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

	$data[1]=$_POST['bg']; 
	
	$data[2]=$_POST['phone'];
	
	$data[3]=$_POST['address'];
	
	
	$data[4]=$_POST['location'];
	
	$data[5]=$_POST['date'];
	
		$data[6]=$_POST['gender'];
	

	return $data;
}

if(isset($_POST['insert'])){
	$info = getData();
	$insert_query="INSERT INTO `req` (`name`, `bg`, `phone`,`address`, `location`,`date`,`gender`) VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]')";
	try{
		$insert_result=mysqli_query($conn, $insert_query);
		if($insert_result)
		{
			if(mysqli_affected_rows($conn)>0){
				 echo "<script>
                        alert ('requested Successfully...!');
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
?>
