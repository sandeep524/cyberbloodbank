<?php if(!isset($_SESSION)) {session_start();}  ?>
<?php include('function.php'); ?>
<?php
			
	$cn=mysqli_connect("localhost","root","","donors");
	
	
			$s="select * from reg where email='" . $_SESSION["email"] . "'";
			
	$q=mysqli_query($cn,$s);
	$r=mysqli_num_rows($q);
	
	$data=mysqli_fetch_array($q);
	$name=$data[1];
	$gender=$data[8];
	$age=$data[0];
	$mobile=$data[4];
	$pic=$data[7];
	$ld=$data[9];
	
	
	if(isset($_POST["update"])) 
	{
		$cn=mysqli_connect("localhost","root","","donors");
		
		
					$s="update reg set dd='" .$_POST["date"]. "'  where email='" .$_SESSION["email"]. "'";
		
$i=mysqli_query($cn,$s);

	echo "<script>alert('last date updated please refresh page')</script>";
	
}
	

?>
<html>
<head>
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
<title>last donation date</title>
</head>
<body>
<center>
<form method="post">
<table>
	
    <tr>
    	<td class="lefttd"  style="vertical-align:middle">update last donation date</td><td><input type="date" name="date"><input type="submit" value="update" name="update"/></td>
    </tr>






</table>
</form>
<a href="profile.php">BACK</a>
</center>

</html>