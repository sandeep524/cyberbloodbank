<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <link rel="stylesheet" href="styleSHEET.css"/>
 <STYLE>
 ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
	width:100%;
    background:#ffffff; /* fallback for old browsers */
  background: -webkit-linear-gradient(right,#faa5b6,#c69dc1);
  background: -moz-linear-gradient(right, #faa5b6,#c69dc1);
  background: -o-linear-gradient(right,#faa5b6,#c69dc1);
  background: linear-gradient(to left,#faa5b6,#c69dc1);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;  
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-size:20px;

}

li a:hover {
    background-color:#ff99cc;
}
</STYLE>
</head>

<body>
<ul>
			 <li><a  href="home.html">HOME</a></li>
			 <li><a href="req.php">REQUEST</a></li>
			</li>
			
		</ul>
	<div id="select">CLICK BELOW LINK TO SEARCH REQUIRED BLOOD GROUP</DIV>
  <span class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">'A' BLOODGROUP</a>
    <div class="dropdown-content">
      <a href="apsearch.php">A+</a>
	<a href="ansearch.php">A-</a>
    </div>
  </span>
  <span class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">'B' BLOODGROUP</a>
    <div class="dropdown-content">
     <a href="bpsearch.php">B+</a>
		<a href="bnsearch.php">B-</a>
	    </div>
  </span>
 <span class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">'O' BLOODGROUP</a>
    <div class="dropdown-content">
    	<a href="opsearch.php">O+</a>
		<a href="onsearch.php">O-</a>
	    </div>
  </span>
  <span class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">'AB' BLOOD GROUP</a>
    <div class="dropdown-content">
     	<a href="abpsearch.php">AB+</a>
		<a href="abnsearch.php">AB-</a>
    </div>
  </span>

<!--<?php include('function.php'); ?>
<form method="post" enctype="multipart/form-data">
 <table cellpadding="20" cellspacing="20" width="1000px" height="200px"  style="margin:auto" >

   <tr><td colspan="7" align="center"></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:bisque" align="center" class="bold">            
<td align="center">Name</td><td align="center">Blood group</td><td align="center">state</td><td align="center">city</td>
            <td align="center">mobile</td>
        </tr>
                   



<?php

	
$cn=mysqli_connect("localhost","root","","donors");
$s="select * from data";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:10px'>$data[0]</td><td  style=' padding-left:20px'>$data[1]</td><td  style=' padding-left:50px'>$data[2]</td><td  style=' padding-left:50px'>$data[3]</td><td  style=' padding-left:60px'>$data[4]</td></tr>";
			}
			mysqli_close($cn);
			?>

</table>
</form>-->
</body>
</html>