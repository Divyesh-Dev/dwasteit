<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Giver page</title>
<link rel = "icon" href = "images/DwasteIt-logos_white.png" type = "image/x-icon">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
<div id="menu-wrapper">
  <div id="menu">
    <ul>
      <li class="current_page_item"><a href="index.html">Homepage</a></li>
	  <li class="current_page_item"><a href="login.php">Login</a></li>
      </ul>
  </div>
  <!-- end #menu --> 
</div>
<div id="header-wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="index.html#impque" target="_self"> <img src="images/DwasteIt-2.png" alt="DON'T WASTE iT!!" width="149" height="147" /></a> <a href="#"></a></h1>
    </div>
  </div>
</div>
<div id="wrapper"> 
  <!-- end #header -->
  <div id="page-bgtop"></div>
  <div id="page">
    <div><img src="images/Don’t-Waste-Food.jpg" alt="" width="600" height="420" />
      <div id="sidebar">
        <ul>
          &emsp;
          <li>
            <h2>&emsp;come with us!&nbsp;</h2>
            <p>Donate food, satisfy hunger, <b>Don't Waste It.</b> where, <strong>"IT"</strong> means<strong> "Food".</strong>&nbsp; &nbsp;</p>
          </li>
          <li>
            <h2>&emsp;&emsp;Categories</h2>
            <ul>
              <li>&emsp;&emsp;&emsp;<a href="giver_cl.php">Remain food? Donate</a></li>
              <li>&emsp;&emsp;&emsp;<a href="taker_cl.php">Need food? search</a></li>
            </ul>
          </li>
          <li>
          
        </ul>
      </div>
      
      <!-- end #sidebar --> 
    </div>
    <div id="content">
      <div class="post">
			
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("wfdp",$cn);
$sql="select count(*) from taker_trans";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
if($row[0]>0)
{
$sql="select max(srno) from taker_trans";
$result=mysql_query($sql,$cn);
$row=mysql_fetch_array($result);
$sr=$row[0]+1;
}
else
$sr=1;
session_start();
$giv=$_SESSION['givid'];
$gd=$_SESSION['givdate'];
$oft=$_SESSION['oftime'];
$np=$_SESSION['persons'];
$tk=$_GET['tk'];
$gnp=$_GET['prsn'];
$sql1="insert into taker_trans values($sr,$tk,'$gd',$gnp,$oft,'Y',$giv)";
mysql_query($sql1,$cn);
$np=$np-$gnp;
$_SESSION['persosns']=$np;
if($np<=0)
echo "<br><br><h3>all given</h3>";
else
header("location:http://localhost/Waste%20Food%20Distribution%20System/gives.php");
?>
 </div>
    </div>
    <!-- end #content -->
    
    <div style="clear: both;">&nbsp;</div>
  </div>
  <div id="page-bgbtm"></div>
  <!-- end #page --> 
</div>
<div id="footer">
  <p>2023. Dwasteit.com. All rights reserved. Devloped by D. S. Joshi.<a href="http://www.freecsstemplates.org/">&nbsp;</a>Photos by <a href="http://fotogrph.com/">fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
