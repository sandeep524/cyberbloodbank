<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="searchcss.css"/>
</head>

<body>
<?php include('function.php'); ?>
<form method="post" enctype="multipart/form-data">
<center><h1 >REQUESTS</h1></center>

 <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >
  
 <tr  align="center" class="bold">            
			

			
            
            <th  style="color:red"align="center">NAME</th>
			

			
            <th  style="color:red" align="center">BLOODGROUP</th>
            
            <th  style="color:red" align="center">MOBILE</th>
            
            <th  style="color:red" align="center">ADDRESS</th>
            

            
            <th  style="color:red" align="center">CITY</th>
            
            <th  style="color:red" align="center">DATE</th>
            
            
            <th  style="color:red" align="center">GENDER</th>
            
        </tr>
                   



<?php

	
$cn=mysqli_connect("localhost","root","","donors");
mysqli_query($cn,"delete from req where date<curdate()");
$s="SELECT * FROM `req` ";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr  align='center' >
				<td style='color:steelblue' style=' padding-left:20px'>$data[0]</td>
				<td style='color:steelblue' style=' padding-left:20px'>$data[1]</td>
				<td style='color:steelblue' style=' padding-left:50px'>$data[2]</td>
				<td style='color:steelblue' style=' padding-left:50px'>$data[3]</td>
				<td style='color:steelblue' style=' padding-left:60px'>$data[4]</td>
				<td style='color:steelblue' style=' padding-left:60px'>$data[5]</td>

				<td style='color:steelblue' style=' padding-left:0px'>$data[6]</td>
</tr>";
			}
			mysqli_close($cn);
			?>


</table>
</form>
<center><a href="profile.php">BACK</a></center>
</body>
</html>