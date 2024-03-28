
  <?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$fl=0;

if(isset($_POST['sbm']))
{
    if($_POST['sbm']== "Submit")
    {
        if(empty($_POST['srno']))
        {
            $err1="<p style= color:red;>srno must exist!!</p>";
            $fl=1;
        }
        if(empty($_POST['takid']))
        {
            $err2="<p style= color:red;>take id must exist!!</p>";
            $fl=1;
        }        
        if(empty($_POST['trdate']))
        {
            $err3="<p style= color:red;>trdate must exist!!</p>";
            $fl=1;
        }                 
        if(empty($_POST['persons']))
        {
            $err4="<p style= color:red;>persons must exist!!</p>";
            $fl=1;
        }
        if(empty($_POST['oftime']))
        {
            $err5="<p style= color:red;>oftime must exist!!</p>";
            $fl=1;
        }               
        if(empty($_POST['status']))
        {
            $err6="<p style= color:red;>status must exist!!</p>";
            $fl=1;
        }        
        if(empty($_POST['givid']))
        {
            $err7="<p style= color:red;>givid must exist!!</p>";
            $fl=1;
        } 
    }
    
}
?>
</footer>

<?php

$connects=mysql_connect("localhost","root");
mysql_select_db("WFDP",$connects);
$sql="select max(srno) from taker_trans";
$result= mysql_query($sql, $connects);
$row=mysql_fetch_array($result);
$id=$row[0]+1;
$dt=date('y-m-d');
?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Taker Tranaction page</title>
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
			<li class="current_page_item"><a href="index_tr.html">Homepage</a></li>
			<li><a href="taker_cl.php">Taker</a></li>
			<li><a href="taker_trans_cl.php">Giver Trans</a></li>
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
		<div><img src="images/donate-food.png" alt="" width="610" height="418" />
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
						<li>&emsp;&emsp;&emsp;<a href="taker_trans_cl.php">make a taker transaction</a></li>
					</ul>
				</li>
				<li>
					<h2>&emsp;&emsp;Reports</h2>
					<ul>
						<li>&emsp;&emsp;&emsp;<a href="giver_display_cl.php">Giver</a></li>
						<li>&emsp;&emsp;&emsp;<a href="giver_trans_display.php">Giver Transaction</a></li>
						<li>&emsp;&emsp;&emsp;<a href="taker_display.php">Taker&nbsp;</a></li>
						<li>&emsp;&emsp;&emsp;<a href="taker_trans_display.php">Taker Transaction</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		
		<!-- end #sidebar -->
		</div>
		
		<div id="content">
			<div class="post">

          <form name="taker_trans" action="taker_trans_cl.php" method="post">
        <center>
            <table>
                <Caption>Taker Information</Caption>
                <tr>
                    <td>Sr no:</td>
                    <td><input type="text" name="srno" onkeypress="return nums()" value="<?php echo $id ?>" placeholder="Enter Seriel no"><br><?php echo $err1; ?></td>
                </tr>
                <tr>
                    <td>Taker id:</td>
                    <td><input type="text" name="takid" onkeypress="return nums()" placeholder="must be 4 digits"><br><?php echo $err2; ?></td>
                </tr>
                <tr>
                    <td>Take date:</td>
                    <td><input type="date" name="trdate" placeholder="Enter date "><br><?php echo $err3; ?></td>
                </tr>
                <tr>
                    <td>Persons:</td>
                    <td><input type="text" name="persons" onkeypress="return nums()" placeholder="No. of persons "><br><?php echo $err4; ?></td>
                </tr>
                <tr>
                    <td>Oftime:</td>
                    <td><input type="time" name="oftime" placeholder="Enter time"><br><?php echo $err5; ?></td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type="text" name="status" placeholder="Status/Quality"><br><?php echo $err6; ?></td>
                </tr>
                <tr>
                    <td>Giver id:</td>
                    <td><input type="text" name="givid" onkeypress="return nums()" placeholder="Must be 4 digits"><br><?php echo $err7; ?></td>
                </tr>
            </table>
            
            <input type="submit" name="sbm" value="Submit" class="button-70" role="button">
            <input type="submit" name="sbm" value="Update" class="button-70" role="button">
            <input type="submit" name="sbm" value="Delete" class="button-70" role="button">
    </center>
    </form>
				
<?php
$connects= mysql_connect("localhost", "root");

    mysql_select_db("WFDP",$connects);
    if(isset($_POST['sbm']))
    {
        $sb= $_POST['sbm'];
        if ($sb=="Submit") 
        {
            if($fl==0)
            {
                 
                $sql ="insert into taker_trans values('$_POST[srno]', '$_POST[takid]', '$_POST[trdate]', '$_POST[persons]', 
                    '$_POST[oftime]', '$_POST[status]','$_POST[givid]')";
                 mysql_query($sql, $connects);
                 echo "data stored...";
            }
        }      
        else if($sb=="Update")
        {
            $sql="update taker_trans set srno= '$_POST[srno]', trdate='$_POST[trdate]', 
                persons='$_POST[persons]', oftime='$_POST[oftime]',status='$_POST[status]', 
                givid='$_POST[givid]' where takid='$_POST[takid]'";
            mysql_query($sql, $connects);
            echo "data updated..";
        }
        else if($sb=="Delete")
        {
            $sql= "delete from taker_trans where takid='$_POST[takid]'";
            mysql_query($sql,$connects);
            echo "Records deleted...";
        }
        else if($sb=="Search")
        {
            echo "<center><table border=1>";
            echo "<caption>Taker transaction Information</caption>";
            echo "<tr>";
            echo "<th>Srno:</th>"; 
            echo "<th>Taker id:</th>";
            echo "<th>Tr Date:</th>";
            echo "<th>Persons::</th>";
            echo "<th>oftime:</th>";
            echo "<th>Status:</th>";
            echo "<th>Giver id:</th>";
            echo "</tr>";
            $sql="select * from taker_trans where takid= '$_POST[takid]'";
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
                echo "</tr>";
            }
            echo "</table> </center>"; 
        }
    }
?>         

		  </div>
			<div style="clear: both;">&nbsp;
			<?php
				
$connects= mysql_connect("localhost", "root");

    mysql_select_db("WFDP",$connects);
    if(isset($_POST['sbm']))
    {
        $sb= $_POST['sbm'];				
		if($sb=="Display")
        {
            echo "<center><table border=1>";
            echo "<caption>Taker transaction Information</caption>";
            echo "<tr>";
            echo "<th>Srno:</th>"; 
            echo "<th>Taker id:</th>";
            echo "<th>Tr Date:</th>";
            echo "<th>Persons::</th>";
            echo "<th>Oftime:</th>";
            echo "<th>Status:</th>";
            echo "<th>Giver id:</th>";
            echo "</tr>";
            $sql="select * from taker_trans";
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
                echo "</tr>";
            }
        }
	}
				?>
			</div>
		</div>
        
			

		<!-- end #content -->
	
	<!-- end #page --> 

<!-- end #footer -->
</body>
</html>
