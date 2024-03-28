#Code of Giver Page
<?php
$err1 = "";
$err2 = "";
$err3 = "";
$err4 = "";
$err5 = "";

$fl = 0;

if ( isset( $_POST[ 'sbm' ] ) ) {
  if ( $_POST[ 'sbm' ] == "Submit" ) {
    if ( empty( $_POST[ 'admin_id' ] ) ) {
      $err1 = "<p style= color:red;>Admin id must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'admin_name' ] ) ) {
      $err2 = "<p style= color:red;>Admin Name must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'admin_pass' ] ) ) {
      $err3 = "<p style= color:red;>Password must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'repass' ] ) ) {
      $err4 = "<p style= color:red;>Re-Password must exist!!</p>";
      $fl = 1;
    }
    if ( empty( $_POST[ 'type' ] ) ) {
      $err5 = "<p style= color:red;>type must exist!!</p>";
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
<title>Admin Signup  page</title>
<link rel = "icon" href = "images/DwasteIt-logos_white.png" type = "image/x-icon">
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script language="javascript">
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
        function matchPassword()
        {  
          
          var pw1 = document.getElementById("pass").value;  
          var pw2 = document.getElementById("repass").value;  
          // document.write(pw1+ pw2);
          if(pw1 != pw2)  
          {   
            alert ("Passwords did not match");
            return false; 
             
          } else {  
            return true;
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
	    <li class="current_page_item"><a href="login_ad.php">Logout</a></li>
    </ul>
  </div>
  <!-- end #menu --> 
</div>
<div id="header-wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="index.html#impque" target="_self"> <img src="images/DwasteIt-2.png" 
      alt="DON'T WASTE iT!!" width="149" height="147" /></a> <a href="#"></a></h1>
    </div>
  </div>
</div>
<div id="wrapper"> 
  <!-- end #header -->
  <div id="page-bgtop"></div>
  <div id="page">
    <div><img src="images/boss.jpg" alt="" width="900" height="420" />
      <div id="sidebar">
        <ul>
          &emsp;
          <li>
            <h2>&emsp;come with us!&nbsp;</h2>
            <p>Donate food, satisfy hunger, <b>Don't Waste It.</b> where, <strong>"IT"</strong> means<strong> "Food".</strong>&nbsp; &nbsp;</p>
          </li> 
        </ul>
      </div>
      
      <!-- end #sidebar --> 
    </div>
    <div id="content">
      <div class="post">
        <form name="Admin" action="admin_signup.php" method="post" >
          <center>
            <table width="350" height="285">
              <br>
              <br>
              <Caption>
              <h1>Admin Sign up</h1>
              <p>&nbsp;</p>
              </Caption>
              <tr>
                <td><strong>Admin id:</strong></td>
                <td><input type="text" name="admin_id" placeholder="Enter Admin id"><br><?php echo $err1; ?></td>
              </tr>
              <tr>
                <td><strong>Admin name:</strong></td>
                <td><input type="text" name="admin_name" placeholder="Enter Name of admin "><br><?php echo $err2; ?></td>
              </tr>
              <tr>
                <td><strong>Password</strong>:</td>
                <td><input type="password" name="admin_pass" id="pass" placeholder="Must be 8 char" > <br><?php echo $err3; ?></td>
              </tr>
              <tr>
                <td><strong>Re-Enter Password</strong>:</td>
                <td><input type="password" name="repass" id="repass" placeholder="Confirm password" onblur="return matchPassword()"><br><?php echo $err4; ?></td>
              </tr>
              <tr>
                <td><strong>Type</strong>:</td>
                <td><input type="text" name="type" onkeypress="return abcd()" placeholder="e.g DEV, Admin, Creator " ><br>
                  <?php echo $err5; ?></td>
              </tr>
            </table>
            <p>&nbsp; </p>
            <p>
              <input type="submit" name="sbm" value="Submit" class="button-70" role="button" >
              <input type="submit" name="sbm" value="Update" class="button-70" role="button">
              <input type="submit" name="sbm" value="Delete_user" class="button-70" role="button">
              <input type="submit" name="sbm" value="Search" class="button-70" role="button">
              <input type="submit" name="sbm" value="Display" class="button-70" role="button">
            </p>
          </center>
        </form>
        <?php
        $connects = mysql_connect( "localhost", "root" );

        mysql_select_db( "WFDP", $connects );
        if ( isset( $_POST[ 'sbm' ] ) ) {
          $sb = $_POST[ 'sbm' ];
          if ( $sb == "Submit" ) {
            if ( $fl == 0 ) {
              $sql = "insert into admin values('$_POST[admin_id]','$_POST[admin_name]', '$_POST[admin_pass]', '$_POST[repass]', '$_POST[type]')";
              mysql_query( $sql, $connects );
              echo "New Admin user added...";
            }
          } else if ( $sb == "Update" ) {
            $sql = "update admin set admin_name='$_POST[admin_name]', admin_pass='$_POST[admin_pass]', repass='$_POST[repass]',
            type='$_POST[type]' where admin_id='$_POST[admin_id]'";
            mysql_query( $sql, $connects );
            echo "Admn data updated..";
          } else if ( $sb == "Delete_user" ) {
            $sql = "delete from admin where admin_id='$_POST[admin_id]'";
            mysql_query( $sql, $connects );
            echo "Records deleted...";
          } else if ( $sb == "Search" ) {
            echo "<center><table border=1>";
            echo "<caption>Admins Information</caption>";
            echo "<tr>";
            echo "<th>Admin id:</th>";
            echo "<th>Admin name::</th>";
            echo "<th>Password:</th>";
            echo "<th>Repass:</th>";
            echo "<th>Type:</th>";
            echo "</tr>";
            $sql = "select * from admin where admin_id= '$_POST[admin_id]'";
            $result = mysql_query( $sql, $connects );
            while ( $row = mysql_fetch_array( $result ) ) {
              echo "<tr>";
              echo "<td>$row[0]</td>";
              echo "<td>$row[1]</td>";
              echo "<td>$row[2]</td>";
              echo "<td>$row[3]</td>";
              echo "<td>$row[4]</td>";
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
            echo "<caption>Admins Information</caption>";
            echo "<tr>";
            echo "<th>Admin id:</th>";
            echo "<th>Admin name::</th>";
            echo "<th>Password:</th>";
            echo "<th>Repass:</th>";
            echo "<th>Type:</th>";
            echo "</tr>";
            $sql = "select * from admin";
            $result = mysql_query( $sql, $connects );
            while ( $row = mysql_fetch_array( $result ) ) {
              echo "<tr>";
              echo "<td>$row[0]</td>";
              echo "<td>$row[1]</td>";
              echo "<td>$row[2]</td>";
              echo "<td>$row[3]</td>";
              echo "<td>$row[4]</td>";
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
  <p>2023. Dwasteit.com. All rights reserved. Devloped by D. S. Joshi.<a href="http://www.freecsstemplates.org/">
    &nbsp;</a>Photos by <a href="http://fotogrph.com/">fotogrph</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
