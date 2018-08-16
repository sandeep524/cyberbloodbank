<?php if(!isset($_SESSION)) {session_start();}  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<title>Untitled Document</title>

 <style>
 body{
 background:#ffffff; /* fallback for old browsers */
  background: -webkit-linear-gradient(right,#faa5b6,#c69dc1);
  background: -moz-linear-gradient(right, #faa5b6,#c69dc1);
  background: -o-linear-gradient(right,#faa5b6,#c69dc1);
  background: linear-gradient(to left,#faa5b6,#c69dc1);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;  	 
	 
 }
table, td, th {
	 background:#ffffff; /* fallback for old browsers */
  background: -webkit-linear-gradient(right,#faa5b6,#c69dc1);
  background: -moz-linear-gradient(right, #faa5b6,#c69dc1);
  background: -o-linear-gradient(right,#faa5b6,#c69dc1);
  background: linear-gradient(to left,#faa5b6,#c69dc1);
    
   margin-left:100px;
   margin-right:100px;
   margin-top:150px;
   margin-bottom:100px;
    text-align: left;

}

table {
	background:#f8dcfa;
    width: 500px;
	border:5px solid #c69dc1;
	font-family: 'Lora', serif;
	color:linear-gradient(to left,#faa5b6,#c69dc1);
	border-radius: 15px;
}

 td {
    padding: 15px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:linear-gradient(to left,#faa5b6,#c69dc1);
}

li {
    float: left;
}

li a {
    display: block;
    color: steelblue;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-size:20px;

}

li a:hover {
    background-color:plum;
}

</style>
</head>

<body>
<ul>
			 <li><a  href="logout.php">LOGOUT</a></li>
			 
             
             <li><a href="viewreq.php">VIEW REQUESTS</a></li>
             
             <li><a href="ld.php">UPDATE LAST DONATION DATE</a></li>
			
		</ul>
<?php

if($_SESSION['donorstatus']=="")
{
	header("location:../login.php");
}
?>
<?php include('function.php'); ?>
<?php
			
	$cn=mysqli_connect("localhost","root","","donors");
	
	
			$s="select * from reg where email='" . $_SESSION["email"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$name=$data[1];
	$gender=$data[8];
	$age=$data[2];
	$mobile=$data[4];
	$ld=$data[9];
	
	
	if(isset($_POST["update"])) 
	{
		$cn=mysqli_connect("localhost","root","","donors");
		
		
					$s="update reg set dd='" .$_POST["date"]. "'  where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);

	echo "<script>alert('last date updated please refresh page')</script>";
	
}
	
	
	
	
	
		
		
	
	

?> 



 <form method="post">
 

   <center>
<img src="detail.png" height="100"/>
   <div><table>
 
		<tr>
			<td class="lefttd"  style="vertical-align:middle"> Name </td><td><?php echo @$name;?></td>
		</tr>
        <tr>
			<td class="lefttd">Gender</td><td><?php echo @$gender;?></td>
		</tr>
         
        <tr>
			<td class="lefttd"  style="vertical-align:middle"> Age</td><td><?php echo @$age;?></td>
		</tr>
        
         <tr>
			<td class="lefttd"  style="vertical-align:middle"> Mobile No</td><td><?php echo @$mobile;?></td>
		</tr>
        <tr>
			<td class="lefttd"  style="vertical-align:middle"> last donation date</td><td><?php echo @$ld;?></td>
		</tr>

        
         
		
			</table></div></center></form>
	
 
   
   
<?php

	
	
	
	
	
	
	
	
	
	
	
	
	if(isset($_POST["sbmt"])) 
	{
		$cn=makeconnection();
		
		
					$s="update reg name='" .$_POST["t1"]. "' ,gender='" .$_POST["r1"]."' , age='" .$_POST["t2"]. "',
					mobile='" .$_POST["t3"]. "' where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record update');</script>";
	
}
?> 


      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
			<div class="clear"></div>
</div>
</div>
</div>


</body>
</html>