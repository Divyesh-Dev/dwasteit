
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Taker Report | dwasteit </title>
	<link rel = "icon" href = 
"images/DwasteIt-logos_white.png" 
        type = "image/x-icon">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script language= "javascript">
        function show() {
            window.print();
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
			<li><a href="giver_cl.php">giver</a></li>
			<li><a href="taker_cl.php">Taker</a></li>
			<li><a href="aboutus.html">About</a></li>
			<li><a href="contactus.html">Contact</a></li>
			<li><a href="login.php">Logout</a></li>
			
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
		<div><img src="images/box giving.png" width="609" height="363" alt="" />
			<div id="sidebar">
			<ul>
					<h2>come with us!&nbsp;</h2>
				  <p>Donate food, satisfy hunger, <b>Don't Waste It.</b> where, <strong>"IT"</strong> means<strong> "Food".</strong>&nbsp; &nbsp;</p>
				</li>
				<li>
					<h2>Reports</h2>
					<ul>
						<li><a href="giver_display_cl.php">Giver</a></li>
						<li><a href="giver_trans_display.php">Giver Transaction</a></li>
						<li><a href="taker_display.php">Taker&nbsp;</a></li>
						<li><a href="taker_trans_display.php">Taker Transaction</a></li>
					</ul>
				</li>
				<li>
					<h2>Categories</h2>
					<ul>
						<li><a href="giver_cl.php">Remain food? Donate</a></li>
						<li><a href="taker_cl.php">Need food? search</a></li>
						<li><a href="taker_trans_cl.php">make a taker transaction</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		</div>
		<div id="content">
			<div class="post">

				
				<form name="taker_display" action="taker_display.php" method="post">
					<center>
						<h1>&nbsp;</h1>
					  <h1>Taker Information Report</h1>
						<p>&nbsp;</p>
						<p>
						<input type="submit" name="sbm" value="Display" class="button-70" role="button">
						  <br>
					  </p>
					</center>
    			</form>
				
		<div class="post">
				
				<div style="clear: both;">&nbsp;
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				</div>
				<div class="entry">
<?php
$connects= mysql_connect("localhost", "root");

    mysql_select_db("WFDP",$connects);
    if(isset($_POST['sbm']))
    {
        $sb= $_POST['sbm'];
        if($sb=="Display")
        {            
            echo "<center><table border=1>";
            echo "<tr>";
            echo "<th>takid:</th>";
            echo "<th>Name:</th>";
            echo "<th>Address:</th>";
            echo "<th>City:</th>";
            echo "<th>Contact:</th>";
            echo "<th>Email Id::</th>";
            echo "<th>Password:</th>";
            echo "<th>Org type:</th>";
            echo "<th>Sub type:</th>";
            echo "</tr>";
            $sql="select * from taker ";
            $result= mysql_query($sql, $connects);
            while ($row=mysql_fetch_array($result)) 
            {
                echo "<tr>";
                echo "<td>$row[0]</td>";
                echo "<td>$row[1]</td>";
                echo "<td>$row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td>$row[4]</td>";
                echo "<td>$row[5]</td>";
                echo "<td>$row[6]</td>";
                echo "<td>$row[7]</td>";
                echo "<td>$row[8]</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br><input type = button name=btn value=Print onclick=show()>";
            echo "</center>";
       }
    }
?>          
  
				</div>
				<div style="clear: both;">&nbsp;</div>
			</div>
          </div>
			<div style="clear: both;">&nbsp;</div>
		</div>
    
		<!-- end #content -->
		
	  <div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>2023. Dwasteit.com. All rights reserved. Devloped by D. S. Joshi.<a href="http://www.freecsstemplates.org/">&nbsp;</a>Photos by Google.com</p>
</div>
<!-- end #footer -->
</body>
</html>



    

      
