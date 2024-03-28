<?php
$err1 = "";
$err2 = "";
$err3 = "";
$err4 = "";
$err5 = "";
$err6 = "";
$err7 = "";
$err8 = "";
$err9 = "";
$fl = 0;

if ( isset( $_POST[ 'sbm' ] ) ) {
  if ( $_POST[ 'sbm' ] == "Submit" ) {
    if ( empty( $_POST[ 'srno' ] ) ) {
      $err1 = "<p style= color:red>srno must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'givid' ] ) ) {
      $err2 = "<p style= color:red;>Giv id must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'givdate' ] ) ) {
      $err3 = "<p style= color:red;>givdate must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'event' ] ) ) {
      $err4 = "<p style= color:red;>event must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'reason' ] ) ) {
      $err5 = "<p style= color:red;>reason must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'persons' ] ) ) {
      $err6 = "<p style= color:red;>persons must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'oftime' ] ) ) {
      $err7 = "<p style= color:red;>oftime must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'remark' ] ) ) {
      $err8 = "<p style= color:red;>remark must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'status' ] ) ) {
      $err9 = "<p style= color:red;>status must exist!!</p>";
      $fl = 1;
    }
  }
}
?>
<?php

$connects = mysql_connect( "localhost", "root" );
mysql_select_db( "WFDP", $connects );
$sql = "select max(srno) from giver_trans";
$result = mysql_query( $sql, $connects );
$row = mysql_fetch_array( $result );
if($row[0]>0)
{
  $sql="select max(srno) from giver_trans";
  $result = mysql_query( $sql, $connects );
  $row = mysql_fetch_array( $result );
  $id = $row[ 0 ] + 1;
  $dt = date( 'y-m-d' );  
}
?>

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
      <li class="current_page_item"><a href="index_ad.html">Homepage</a></li>
      <li><a href="giver_ad.php">giver</a></li>
      <li><a href="giver_trans_ad.php">Giver Trans</a></li>
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
   <form name="giver_trans" action="giver_trans_ad.php" method="post">
          <center>
            <table width="354" height="285">
              <br>
              <br>
              <Caption>
              <h1>Giver Transaction</h1>
              <p>&nbsp;</p>
              </Caption>
              <tr>
                <td width="85"><strong>Srno:</strong></td>
                <td width="257"><input type="text" name="srno" onkeypress="return nums()" value="<?php echo $id; ?>" id=""><br>
                  <?php echo $err1; ?></td>
              </tr>
              <tr>
                <td><strong>Giver id:</strong></td>
                <td><input type="text" name="givid" onkeypress="return nums()" placeholder="must be 4 digits" id=""><br>
                  <?php echo $err2; ?></td>
              </tr>
              <tr>
                <td><strong>Giv date:</strong></td>
                <td><input type="date" name="givdate" id="" value=<?php echo date('Y-m-d');?>><br>
                  <?php echo $err3; ?></td>
              </tr>
              <tr>
                <td><strong>event:</strong></td>
                <td><input type="text" name="event" id="" placeholder="food made for event"><br>
                  <?php echo $err4; ?></td>
              </tr>
              <tr>
                <td><strong>Reason:</strong></td>
                <td><input type="text" name="reason" id="" placeholder="Reason to give"><br>
                  <?php echo $err5; ?></td>
              </tr>
              <tr>
                <td><strong>Persons:</strong></td>
                <td><input type="text" name="persons" onkeypress="return nums()" id="" placeholder="No of persons "><br>
                  <?php echo $err6; ?></td>
              </tr>
              <tr>
                <td><strong>of time:</strong></td>
                <td><input type="time" name="oftime" id="" ><br>
                  <?php echo $err7; ?></td>
              </tr>
              <tr>
                <td><strong>Remark:</strong></td>
                <td><input type="text" name="remark" id="" placeholder="Enter Remark"><br>
                  <?php echo $err8; ?></td>
              </tr>
              <tr>
                <td><strong>Status:</strong></td>
                <td><input type="text" name="status" id="" placeholder="Status/Quality"><br>  
                  <?php echo $err9; ?></td>
              </tr>
            </table>
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
    $connects = mysql_connect( "localhost", "root" );

    mysql_select_db( "WFDP", $connects );
    if ( isset( $_POST[ 'sbm' ] ) ) 
	{
      $sb = $_POST[ 'sbm' ];
      if ( $sb == "Submit" ) {
        if ( $fl == 0 ) {
          $sql = "insert into giver_trans values('$_POST[srno]', '$_POST[givid]', '$_POST[givdate]', '$_POST[event]', 
                            '$_POST[reason]','$_POST[persons]','$_POST[oftime]', '$_POST[remark]','$_POST[status]')";
          mysql_query( $sql, $connects );
          echo "data stored...";
          session_start();
          $_SESSION['givid']=$_POST['givid'];
          $_SESSION['givdate']=$_POST['givdate'];
          $_SESSION['oftime']=$_POST['oftime'];
          $_SESSION['persons']=$_POST['persons'];
          header("location:http://localhost/Waste%20Food%20Distribution%20System/gives.php");
        }
      } else if ( $sb == "Update" ) {
        $sql = "update giver_trans set srno= '$_POST[srno]', givdate='$_POST[givdate]', event='$_POST[event]', 
                            reason='$_POST[reason]', persons='$_POST[persons]', oftime='$_POST[oftime]', remark='$_POST[remark]',status='$_POST[status]' 
                            where givid='$_POST[givid]'";
        mysql_query( $sql, $connects );
        echo "data updated..";
      } else if ( $sb == "Delete" ) {
        $sql = "delete from giver_trans where givid='$_POST[givid]'";
        mysql_query( $sql, $connects );
        echo "Records deleted...";
      } 
		else if ( $sb == "Search" ) 
		{
			echo "<center><table border=1>";
			echo "<caption><h3>Giver transaction Information</h3></caption>";
			echo "<tr>";
			echo "<th>Srno:</th>";
			echo "<th>Giver id:</th>";
			echo "<th>Giv Date:</th>";
			echo "<th>Event:</th>";
			echo "<th>Reason:</th>";
			echo "<th>Persons::</th>";
			echo "<th>oftime:</th>";
			echo "<th>remark:</th>";
			echo "<th>Status:</th>";
			echo "</tr>";
			$sql = "select * from giver_trans where givid= '$_POST[givid]'";
			$result = mysql_query( $sql, $connects );
			while ( $row = mysql_fetch_array( $result ) ) {
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
		else if ( $sb == "Display" ) 
		{
		  echo "<center><table border=1>";
		  echo "<caption><h3>Giver transaction Information<h3></caption>";
		  echo "<tr>";
		  echo "<th>Srno:</th>";
		  echo "<th>Giver id:</th>";
		  echo "<th>Giv Date:</th>";
		  echo "<th>Event:</th>";
		  echo "<th>Reason:</th>";
		  echo "<th>Persons::</th>";
		  echo "<th>oftime:</th>";
		  echo "<th>remark:</th>";
		  echo "<th>Status:</th>";
		  echo "</tr>";
		  $sql = "select * from giver_trans";
		  $result = mysql_query( $sql, $connects );
		  while ( $row = mysql_fetch_array( $result ) ) {
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
    	}
	}
  
    ?>
	  
    </div>
		<!-- end #sidebar -->
</div>
</body>
</html>




        
        
    