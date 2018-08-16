<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="searchcss.css"/>
</head>

<body>
<?php include('function.php'); ?>
<form method="post" enctype="multipart/form-data">
<center><h1 >'B POSTIVE BLOOD GROUP'</h1></center>
 <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >
  
 <tr  align="center" class="bold">            
			

			
            
            <th  style="color:red"align="center">NAME</th>
			
            <th   style="color:red" align="center">AGE</th>
			
            <th  style="color:red" align="center">BLOODGROUP</th>
            
            <th  style="color:red" align="center">MOBILE</th>
            
            <th  style="color:red" align="center">EMAIL</th>
            

            
            <th  style="color:red" align="center">CITY</th>
            
            <th  style="color:red" align="center">GENDER</th>
            
            
            <th  style="color:red" align="center">LAST DONATED ON</th>
        </tr>
                   



<?php

	
$cn=mysqli_connect("localhost","root","","donors");

$date=date("y-m-d");
$sub=date('Y-m-d',(strtotime ( '-90 day' , strtotime ( $date) ) ));

echo("minimum donation date is below:" );print_r($sub);

$s="SELECT * FROM reg WHERE bg=\"B+\" AND DD<\"$sub\" and age>\"18\" order by DD asc ";

	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr  align='center' >

				<td style='color:steelblue' style=' padding-left:20px'>$data[1]</td>
				<td style='color:steelblue' style=' padding-left:50px'>$data[2]</td>
				<td style='color:steelblue' style=' padding-left:50px'>$data[3]</td>
				<td style='color:steelblue' style=' padding-left:60px'>$data[4]</td>
				<td style='color:steelblue' style=' padding-left:60px'>$data[5]</td>

				<td style='color:steelblue' style=' padding-left:0px'>$data[7]</td>
				<td style='color:steelblue' style=' padding-left:60px'>$data[8]</td>
				<td style='color:steelblue' style=' padding-left:60px'>$data[9]</td>";
			}
			mysqli_close($cn);
			?>


</table>
</form>
<center><a href="home.html">HOME</a></center>
</body>
</html>