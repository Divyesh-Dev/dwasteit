<?php
$err1="";
$err2="";
$err3="";
$err4="";
$err5="";
$err6="";
$err7="";
$err8="";
$err9="";
$err10="";
$fl=0;

if(isset($_POST['sbm']))
{
    if($_POST['sbm']== "Submit")
    {
        if(empty($_POST['takid']))
        {
            $err1="<p style= color:red;>tak id must exist!!</p>";
            $fl=1;
        }
        if(empty($_POST['name']))
        {
            $err2="<p style= color:red;>Name must exist!!</p>";
            $fl=1;
        }        
        if(empty($_POST['addr']))
        {
            $err3="<p style= color:red;>Address must exist!!</p>";
            $fl=1;
        }        
        if(empty($_POST['city']))
        {
            $err4="<p style= color:red;>City must exist!!</p>";
            $fl=1;
        } 
        if(empty($_POST['cont_no']))
        {
            $err5="<p style= color:red;>Contact no must exist!!</p>";
            $fl=1;
        }        
        if(empty($_POST['email_id']))
        {
            $err6="<p style= color:red;>email must exist!!</p>";
            $fl=1;
        }
        if(empty($_POST['password']))
        {
            $err7="<p style= color:red;>password must exist!!</p>";
            $fl=1;
        }        
        if(empty($_POST['org_type']))
        {
            $err8="<p style= color:red;>org_type must exist!!</p>";
            $fl=1;
        }        
        if(empty($_POST['persons']))
        {
            $err9="<p style= color:red;>persons must exist!!</p>";
            $fl=1;
        }        
        if(empty($_POST['sub_type']))
        {
            $err10="<p style= color:red;>sub_type must exist!!</p>";
            $fl=1;
        }        
    }
    if($_POST['sbm']=="Search")
    {
        if(empty($_POST['takid']))
        {
            $err1="Enter valid tak id...or tak id must exist";
            $fl=1;
        }  
    }    
}
?>

<?php

$connects=mysql_connect("localhost","root");
mysql_select_db("WFDP",$connects);
$sql="select max(takid) from taker";
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
<title>Taker Information</title>
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
			<li class="current_page_item"><a href="index_ad.html">Homepage</a></li>
			<li class="current_page_item"><a href="login.php">Login</a></li>
			<li><a href="giver_ad.php">Sign in as Giver</a></li>
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
    <div><img src="images/admin (1).jpeg" alt="" width="900" height="420" />
		<div id="sidebar">
			<ul>
				&emsp;
				<li>
					<h2>&emsp;come with us!&nbsp;</h2>
				  <p>Donate food, satisfy hunger, <b>Don't Waste It.</b> where, <strong>"IT"</strong> means<strong> "Food".</strong>&nbsp; &nbsp;</p>
				</li>
				<li>
					<h2>&emsp;&emsp;Reports</h2>
					<ul>
						<li>&emsp;&emsp;&emsp;<a href="giver_display_ad.php">Giver</a></li>
						<li>&emsp;&emsp;&emsp;<a href="giver_trans_display_ad.php">Giver Transaction</a></li>
						<li>&emsp;&emsp;&emsp;<a href="taker_display_ad.php">Taker&nbsp;</a></li>
						<li>&emsp;&emsp;&emsp;<a href="taker_trans_display_ad.php">Taker Transaction</a></li>
					</ul>
				</li>
			</ul>
		</div>
		
		
		<!-- end #sidebar -->
		</div>
		
		<div id="content">
			<div class="post">

          <form name="taker" action="taker_ad.php" method="post">
        <center>
            <table width="330" height="360">
                <Caption><h1>Signing Taker</h1>
                <p>&nbsp;</p>
                </Caption>
                <tr>
                    <td><strong>takers id:</strong></td>
                    <td><input type="text" name="takid" id="" value="<?php echo $id; ?>" onkeypress="return nums()" placeholder="must be 4 digit "><?php echo $err1; ?></td>
                </tr>
                <tr>
                    <td><strong>Name:</strong></td>
                    <td><input type="text" name="name" onkeypress="return abcd()" placeholder="Enter taker's name"><?php echo $err2; ?></td>
                </tr>
                <tr>
                    <td><strong>Address:</strong></td>
                    <td><input type="text" name="addr" placeholder="Enter address"><?php echo $err3; ?></td>
                </tr>
                <tr>
                    <td><strong>City:</strong></td>
                    <td><input type="text" name="city" onkeypress="return abcd()" placeholder="Enter City"><?php echo $err4; ?></td>
                </tr>
                <tr>
                    <td><strong>Contact No:</strong></td>
                    <td><input type="number" name="cont_no" placeholder="Enter Mob No."><?php echo $err5; ?></td>
                </tr>
                <tr>
                    <td><strong>Email ID:</strong></td>
                    <td><input type="email" name="email_id" placeholder="Example@email.com"><?php echo $err6; ?></td>
                </tr>
                <tr>
                    <td><strong>Password:</strong></td>
                    <td><input type="password" name="password" placeholder="Must be 8 digit"><?php echo $err7; ?></td>
                </tr>
                <tr>
                    <td><strong>Organizaion Type:</strong></td>
                    <td><input type="text" name="org_type" onkeypress="return abc()" placeholder="Enter org type"><?php echo $err8; ?></td>
                </tr>
                <tr>
                    <td><strong>Persons:</strong></td>
                    <td><input type="number" name="persons" placeholder="No of persons?"><?php echo $err9; ?></td>
                </tr>
                <tr>
                    <td><strong>Sub Type:</strong></td>
                    <td><input type="text" name="sub_type" placeholder="Enter Sub type "><?php echo $err10; ?></td>
                </tr>
            </table>
            
            <p>&nbsp;</p>
            <p>
            <input type="submit" name="sbm" value="Submit" class="button-70" role="button">
            <input type="submit" name="sbm" value="Update" class="button-70" role="button">
            <input type="submit" name="sbm" value="Delete" class="button-70" role="button">
            <input type="submit" name="sbm" value="Search" class="button-70" role="button">
            <input type="submit" name="sbm" value="Display" class="button-70" role="button">
            </p>
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
                 
                $sql ="insert into taker values('$_POST[takid]', '$_POST[name]', '$_POST[addr]', 
                        '$_POST[city]','$_POST[cont_no]','$_POST[email_id]', '$_POST[password]','$_POST[org_type]','$_POST[persons]','$_POST[sub_type]')";
                mysql_query($sql, $connects);
                echo "data stored...";
                header("location:http://localhost/Waste%20Food%20Distribution%20System/login.php");

            }

        }   
         
        else if($sb=="Update")
        {
            $sql="update taker set name='$_POST[name]', addr='$_POST[addr]',city='$_POST[city]', 
            cont_no ='$_POST[cont_no]', email_id='$_POST[email_id]', password='$_POST[password]', 
            org_type='$_POST[org_type]', persons='$_POST[persons]', sub_type='$_POST[sub_type]'
            where takid='$_POST[takid]'";
            mysql_query($sql, $connects);
            echo "data updated..";
        }
        else if($sb=="Delete")
        {
            $sql= "delete from taker where takid='$_POST[takid]'";
            mysql_query($sql,$connects);
            echo "Records deleted...";
        }
        else if($sb=="Search")
        {
            if($fl==0)
            {
                echo "<center><table border=1>";
                echo "<caption>taker Information</caption>";
                echo "<tr>";
                echo "<th>takid:</th>";
                echo "<th>Name:</th>";
                echo "<th>Address:</th>";
                echo "<th>City:</th>";
                echo "<th>Contact:</th>";
                echo "<th>Email Id::</th>";
                echo "<th>Password:</th>";
                echo "<th>Org type:</th>";
                echo "<th>Persons:</th>";
                echo "<th>Sub type:</th>";
                echo "</tr>";
                $sql="select * from taker where takid='$_POST[takid]'";
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
                    echo "<td>$row[9]</td>";
                    echo "</tr>";
                }
                echo "</table> </center>"; 
            }
                       
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
            echo "<caption>taker Information</caption>";
            echo "<tr>";
            echo "<th>takid:</th>";
            echo "<th>Name:</th>";
            echo "<th>Address:</th>";
            echo "<th>City:</th>";
            echo "<th>Contact:</th>";
            echo "<th>Email Id::</th>";
            echo "<th>Password:</th>";
            echo "<th>Org type:</th>";
            echo "<th>Persons:</th>";
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
                echo "<td>$row[9]</td>";
                echo "</tr>";
            }
            echo "</table> </center>";
       }
	}
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
	<p>2023. Dwasteit.com. All rights reserved. Devloped by D. S. Joshi.<a href="http://www.freecsstemplates.org/">&nbsp;</a>Photos by Google.com</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>

