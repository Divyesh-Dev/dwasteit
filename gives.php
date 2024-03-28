<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Giver Transaction Page | dwasteit</title>
<link rel = "icon" href = "images/DwasteIt-logos_white.png" type = "image/x-icon">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script language="javascript">
        function nums() {
            var num;
            num= event.keyCode;
            if (num>=48 && num<=57) {
                event.keyCode=nums;
                return true;
            }
            else{
                event.keyCode=0;
                return false;
            }    
        }

        function abcd() {
            var abc;
            abc= event.keyCode;
            if((abc>=65 && abc<=90)||(abc>=97 && abc<=122)|| abc==32){
                event.keyCode=abc;
                return true;
            }
            else{
                event.keyCode=0;    
                return false;
            }
        }

    </script>
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
    font-family: Montserrat, sans-serif;
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
      <li class="current_page_item"><a href="index_gr.php">Homepage</a></li>
	  <li class="current_page_item"><a href="login.php">Login</a></li>
      <li><a href="giver_cl.php">giver</a></li>
      <li><a href="giver_trans.php">Giver Trans</a></li>
      <li><a href="aboutus.html">About</a></li>
      <li><a href="contactus.html">Contact</a></li>
      <li><a href="#login.php">Logout</a></li>
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
    <div><img src="images/donate2.png" alt="" width="610" height="350" />
      <div id="sidebar">
        <ul>
          &emsp;
          
          <li>
            <h2>&emsp;come with us!&nbsp;</h2>
            <p>Donate food, satisfy hunger, <b>Don't Waste It.</b> where, <strong>"IT"</strong> means<strong> "Food".</strong>&nbsp; &nbsp;</p>
          </li>
      <!-- end #sidebar --> 
    </div>
<?php
$cn=mysql_connect("localhost","root");
mysql_select_db("wfdp",$cn);
echo"<br><br><br><center><table border=1>";
echo"<tr>";
echo"<th>takerid</th>";
echo"<th>takername</th>";
echo"<th>address</th>";
echo"<th>city</th>";
echo"<th>mobno</th>";
echo"<th>emailid</th>";
// echo"<th>password</th>";
echo"<th>orgtype</th>";
echo"<th>person</th>";
echo"<th>subtype</th>";
echo"<th>giveto</th>";
echo"</tr>";
session_start();
$pr=$_SESSION['persons'];
$gd=$_SESSION['givdate'];
$sql="select * from taker where persons<=$pr and takid not in (select takid from taker_trans where trdate=$gd)";
$result=mysql_query($sql,$cn);
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>$row[0]</td>";
echo"<td>$row[1]</td>";
echo"<td>$row[2]</td>";
echo"<td>$row[3]</td>";
echo "<td><a href=tel:$row[4]>$row[4]</td>";
echo "<td><a href=mailto:$row[5]>$row[5]</td>";
// echo"<td>$row[6]</td>";
echo"<td>$row[7]</td>";
echo"<td>$row[8]</td>";
echo"<td>$row[9]</td>";
echo"<td><a href=aftergives.php?tk=$row[0]&prsn=$row[8]><input type= button name=btn value=giveto class=button-70 role=button></a></td>";
echo"</tr>";
}
echo"</table></center>";
?>

</div>
		<!-- end #sidebar -->
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