
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Login | Don't Waste IT!</title>
	<link rel = "icon" href = "images/DwasteIt-logos_white.png" type = "image/x-icon">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<style>
    .button-70 {
  background-image: linear-gradient(#0dccea, #0d70ea);
  border: 0;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, .3) 0 5px 15px;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: Montserrat,sans-serif;
  font-size: .9em;
  margin: 5px;
  padding: 10px 15px;
  text-align: center;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}
</style>
<body>
<div id="menu-wrapper">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.html">Homepage</a></li>
			<li><a href="aboutus.html">About</a></li>
			<li><a href="contactus.html">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu --> 
</div>
<div id="header-wrapper">
	<div id="header">
		<div id="logo">
		  <h1><a href="index.html#impque" target="_self">
			  <img src="images/DwasteIt-2.png" alt="DON'T WASTE iT!!" width="149" height="147" /></a> <a href="#"></a></h1>
</div>
	</div>
</div>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/bitehelps.jpg" alt="" width="880" height="270" />
		
            <form name="login" action="login.php" method="post" style="font-size: 18pt;">
                <br><center>
                    <h1>Don't Waste It</h1>
                    <h5> <b>दीपो भक्षयते ध्वान्तं-</b> We are what we eat</h5>
                    <table  width="120" height="150" style="font-family:cursive; font-size:22pt;">
                        <tr>
                            <td><b>User id</b></td>
                            <td><input type = "text" name = uid placeholder="Enter User/Admin"></td>
                        </tr>
                        <tr>
                            <td><b>Password:</b></td>
                            <td><input type = "password" name = password placeholder="Enter Password "></td>
                        </tr>
                        <tr>
                            <td><b>Type:</b></td>
                            <td><input type = "text" name = "type" onkeypress="return abcd()" placeholder="Only for Admin"></td>
                        </tr>
                    </table>    
                    <li style="font-family:cursive; font-size:11pt"><a href="giver_cl.php">New Giver </a>|<a href="taker_cl.php"> New Taker</a></li>
                      <br>
                      <input type="submit" name="sbm" value="login" class="button-70" role="button">
                </center>
            </form>
		
		</div>
		
		<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("wfdp",$cn);
if(isset($_POST['sbm']))
{
    $sql="select count(*) from giver where givid='$_POST[uid]' and password='$_POST[password]'";
    $result=mysql_query($sql,$cn);
    $row=mysql_fetch_array($result);
    if($row[0]>0)
    {
        header("location:http://localhost/Waste%20Food%20Distribution%20System/index_gr.html");
    }
    else if($row[0]==0)
    {
        $sql="select count(*) from taker where takid='$_POST[uid]' and password='$_POST[password]'";
        $result=mysql_query($sql,$cn);
        $row=mysql_fetch_array($result);
        if($row[0]>0)
        {
            header("location:http://localhost/Waste%20Food%20Distribution%20System/index_tr.html");
        }
        else if($row[0]==0)
        {
            $sql="select count(*) from admin where admin_id='$_POST[uid]' and admin_pass='$_POST[password]' and type='$_POST[type]' ";
            $result=mysql_query($sql,$cn);
            $row=mysql_fetch_array($result);
            if($row[0]>0)
            {
                header("location:http://localhost/Waste%20Food%20Distribution%20System/index_ad.html");
            }else 
            {
                echo "<center><h3 style=color:red; >Invalid: User Id or Password</h3> </center>";
            }    
        }
    }
}   
?>
			

		<!-- end #content -->	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>2023. Dwasteit.com. All rights reserved. Devloped by D. S. Joshi.<a href="http://www.freecsstemplates.org/">&nbsp;</a>Photos by Google.com</p>
</div>
<!-- end #footer -->
</body>
</html>


        