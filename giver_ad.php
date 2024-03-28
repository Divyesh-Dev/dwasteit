#Code of Giver Page
<?php
$err1 = "";
$err2 = "";
$err3 = "";
$err4 = "";
$err5 = "";
$err6 = "";
$err7 = "";
$err8 = "";
$fl = 0;

if ( isset( $_POST[ 'sbm' ] ) ) {
  if ( $_POST[ 'sbm' ] == "Submit" ) {
    if ( empty( $_POST[ 'givid' ] ) ) {
      $err1 = "<p style= color:red;>Giv id must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'name' ] ) ) {
      $err2 = "<p style= color:red;>Name must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'addr' ] ) ) {
      $err3 = "<p style= color:red;>Address must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'city' ] ) ) {
      $err4 = "<p style= color:red;>City must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'cont_no' ] ) ) {
      $err5 = "<p style= color:red;>Contact no must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'email_id' ] ) ) {
      $err6 = "<p style= color:red;>email must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'password' ] ) ) {
      $err7 = "<p style= color:red;>password must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'occupation' ] ) ) {
      $err8 = "<p style= color:red;>occupation must exist!!</p>";
      $fl = 1;
    }
  }

}
?>
<?php

$connects = mysql_connect( "localhost", "root" );
mysql_select_db( "WFDP", $connects );
$sql = "select max(givid) from giver";
$result = mysql_query( $sql, $connects );
$row = mysql_fetch_array( $result );
$id = $row[ 0 ] + 1;
$dt = date( 'y-m-d' );
?>

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
      <li><a href="taker_ad.php">Sign in as Taker</a></li>
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
    <div id="content">
      <div class="post">
        <form name="giver" action="giver_cl.php" method="post">
          <center>
            <table width="293" height="285">
              <br>
              <br>
              <Caption>
              <h1>Sign up as Giver!!</h1>
              <p>&nbsp;</p>
              </Caption>
              <tr>
                <td><strong>Giver id:</strong></td>
                <td><input type="text" name="givid" value="<?php echo $id; ?>" onkeypress="return nums()" id="" >
                  <br><?php echo $err1; ?></td>
              </tr>
              <tr>
                <td><strong>Name</strong>:</td>
                <td><input type="text" name="name" onkeypress="return abcd()" placeholder="Enter giver's Name">
                  <br><?php echo $err2; ?></td>
              </tr>
              <tr>
                <td><strong>Address</strong>:</td>
                <td><input type="text" name="addr" placeholder="Enter Address">
                  <br><?php echo $err3; ?></td>
              </tr>
              <tr>
                <td><strong>City</strong>:</td>
                <td><input type="text" name="city" placeholder="Enter City" onkeypress="return abcd()">
                  <br><?php echo $err4; ?></td>
              </tr>
              <tr>
                <td><strong>Contact No</strong>:</td>
                <td><input type="number" name="cont_no" placeholder="Enter Mob No." >
                  <br><?php echo $err5; ?></td>
              </tr>
              <tr>
                <td><strong>Email ID</strong>:</td>
                <td><input type="email" name="email_id" placeholder="Example@email.com">
                  <br><?php echo $err6; ?></td>
              </tr>
              <tr>
                <td><strong>Password:</strong></td>
                <td><input type="password" name="password" placeholder="Enter Password">
                  <br><?php echo $err7; ?></td>
              </tr>
              <tr>
                <td><strong>Occupation</strong>:</td>
                <td><input type="text" name="occupation" onkeypress="return abcd ()" placeholder="What do you do?">
                  <br><?php echo $err8; ?></td>
              </tr>
            </table>
            <p>&nbsp; </p>
            <p>
              <input type="submit" name="sbm" value="Submit" class="button-70" role="button">
              <input type="submit" name="sbm" value="Update" class="button-70" role="button">
              <input type="submit" name="sbm" value="Delete" class="button-70" role="button">
              <input type="submit" name="sbm" value="Search" class="button-70" role="button">
              <input type="submit" name="sbm" value="Display" class="button-70" role="button">
            </p>
          </center>
        </form>
      ccc else if ( $sb == "Search" ) {
            echo "<center><table border=1>";
            echo "<caption>Giver Information</caption>";
            echo "<tr>";
            echo "<th>Givid:</th>";
            echo "<th>Name:</th>";
            echo "<th>Address:</th>";
            echo "<th>City:</th>";
            echo "<th>Contact:</th>";
            echo "<th>Email Id::</th>";
            echo "<th>Password:</th>";
            echo "<th>Occupation:</th>";
            echo "</tr>";
            $sql = "select * from giver where givid= '$_POST[givid]'";
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
              echo "</tr>";
            }
            echo "</table> </center>";

          }

        }

        ?>
      </div>
      <div style="clear: both;">
        <?php

        $connects = mysql_connect( "localhost", "root" );

        mysql_select_db( "WFDP", $connects );
        if ( isset( $_POST[ 'sbm' ] ) ) {
          $sb = $_POST[ 'sbm' ];
          if ( $sb == "Display" ) {
            echo "<center><table border=1>";
            echo "<caption>Giver Information</caption>";
            echo "<tr>";
            echo "<th>Givid:</th>";
            echo "<th>Name:</th>";
            echo "<th>Address:</th>";
            echo "<th>City:</th>";
            echo "<th>Contact:</th>";
            echo "<th>Email Id::</th>";
            echo "<th>Password:</th>";
            echo "<th>Occupation:</th>";
            echo "</tr>";
            $sql = "select * from giver";
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
  <p>2023. Dwasteit.com. All rights reserved. Devloped by D. S. Joshi.<a href="http://www.freecsstemplates.org/">&nbsp;</a>Photos by <a href="http://fotogrph.com/">fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
