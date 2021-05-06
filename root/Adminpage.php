<?php
	session_start();
?>

<html>
<head>
<title>Adminpage</title>
<style type="text/css">
.singleborder {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
.redcolor {
	font-family: "Times New Roman", Times, serif;
	font-weight: normal;
	color: #F00;
}
.scrool {
	overflow: auto;
	visibility: visible;
	position: static;
	left: 585px;
	top: 224px;
	width: 600px;
	border-top-style: groove;
	border-right-style: groove;
	border-bottom-style: groove;
	border-left-style: groove;
	height: 400px;
}
.dbsingleborder {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-width: thin;
	border-right-width: thin;
	border-bottom-width: thin;
	border-left-width: thin;
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bold;
	text-align: center;
}
.dbtext {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: normal;
	text-align: center;
	font-style: normal;
	border-top-style: inset;
	border-right-style: inset;
	border-bottom-style: inset;
	border-left-style: inset;
	position: static;
	color: #00F;
}
.bluetext {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #00F;
	text-align: left;
}
.Border1 {	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}
</style>
</head>

<body>

	<?php

$msg1="";
$msgusername="";
$msguserpassword="";
$msguseremail="";
$msgusergender= "";
$msguserage= "";
$msguseroccupation= "";
$msguserstatus= "";
	

if(isset($_POST['searchuser'])){
	
	$m =  $_POST['txtsearchname'];
	
	$c = mysqli_connect("localhost","root","","chattingpeople");
	$s = "select * from registeruser where user_name = '$m'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){

$c = mysqli_connect("localhost","root","","chattingpeople");
$s = "SELECT user_name, user_password, user_email, user_gender, user_age, user_occupation, user_status FROM registeruser";
	
	if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
	
	$msgusername= $row["user_name"];
	$msguserpassword= $row["user_password"];
	$msguseremail= $row["user_email"];
	$msgusergender= $row["user_gender"];
	$msguserage= $row["user_age"];
	$msguseroccupation= $row["user_occupation"];
	$msguserstatus= $row["user_status"];
	
	}
	}
	}
	else
	{
	$msg1= "No User Found";
	}
	}
	?>
    
<div align="center">
  <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>&nbsp;</p>
    <p><a href="index.php">Go to Chatting Page</a></p>
    <p>ADMIN CHATTING SYSTEM    </p>
    <table width="1097" height="479" border="0" align="center">
      <tr>
        <th width="460" height="473" scope="col"><p>Report</p>
          <table width="423" height="362" border="1" class="singleborder">
          <tr>
            <th scope="col"><div align="center">
              <table width="279" border="0">
                <tr>
                  <td width="16">&nbsp;</td>
                  <td width="247">&nbsp;</td>
                </tr>
              </table>
              <table width="282" border="0">
                <tr>
                  <td width="105" height="27"><div align="right">Name:</div></td>
                  <td width="167" class="bluetext"><?php echo $msgusername;?></td>
                </tr>
                <tr>
                  <td height="21" align="right">Password:</td>
                  <td class="bluetext"><?php echo $msguserpassword;?></td>
                </tr>
                <tr>
                  <td height="26" align="right">Email:</td>
                  <td class="bluetext"><?php echo $msguseremail;?></td>
                </tr>
                <tr>
                  <td height="21"><div align="right">Gender:</div></td>
                  <td class="bluetext"><?php echo $msgusergender;?></td>
                </tr>
                <tr>
                  <td height="21"><div align="right">Age:</div></td>
                  <td class="bluetext"><?php echo $msguserage;?></td>
                </tr>
                <tr>
                  <td height="21"><div align="right">Occupation:</div></td>
                  <td class="bluetext"><?php echo $msguseroccupation;?></td>
                </tr>
                <tr>
                  <td height="21"><div align="right">Status:</div></td>
                  <td class="bluetext"><?php echo $msguserstatus;?></td>
                </tr>
              </table>
              <p>&nbsp;</p>
            </div></th>
          </tr>
        </table>
          <table width="419" border="0">
            <tr>
            <th width="144" height="63" valign="top" scope="col"><div align="left">
              <input name="txtsearchname" type="text" id="txtsearchname" placeholder="User Name" />
              <span class="redcolor"><?php echo $msg1; ?></span></div></th>
            <th width="233" valign="top" scope="col"><div align="left">
              <input type="submit" name="searchuser" id="searchuser" value="Search" />
            </div></th>
          </tr>
      </table>
        <p>
          <label for="searchname"></label>
        </p></th>
        <th width="800" align="center" scope="col"><div class="scrool" id="boxscrool">
          <p>Database: Choose ID and Click Delete</p>
          <table width="800" border="1" class="dbsingleborder">
            <tr>
              <th width="50" scope="col">id</th>
              <th width="80" scope="col">user_name</th>
              <th width="120" scope="col">password</th>
              <th width="180" scope="col">email</th>
              <th width="80" scope="col">gender</th>
              <th width="50" scope="col">age</th>
              <th width="80" scope="col">occupation</th>
              <th width="120" scope="col">status</th>
              
              
            </tr>
          </table>
          
          <?php 
		  
$c = mysqli_connect("localhost","root","","chattingpeople");
$s = "SELECT peopleid, user_name, user_password, user_email, user_gender, user_age, user_occupation, user_status FROM registeruser";
$result = mysqli_query($c,$s);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
	 echo "<table width=800 border=0 class=dbtext>";
     echo "<tr>";
	 echo "<th width=50 scope=col>$row[peopleid]</th>";
     echo "<th width=80 scope=col>$row[user_name]</th>";
     echo "<th width=120 scope=col>$row[user_password]</th>";
     echo "<th width=180 scope=col>$row[user_email]</th>";
     echo "<th width=80 scope=col>$row[user_gender]</th>";
     echo "<th width=50 scope=col>$row[user_age]</th>";
     echo "<th width=80 scope=col>$row[user_occupation]</th>";
     echo "<th width=120 scope=col>$row[user_status]</th>";
	 
	 echo "</tr></br>";
     echo "</table>";
     }
     } 
	else 
	 {
     echo "0 results";
	}
	$c->close();
			
	?>
    
	<?php 
    $msg5= "";
	 
	 if(isset($_POST['deleteuser'])){
	 $t =  $_POST['txtid'];
	 
	 $c = mysqli_connect("localhost","root","","chattingpeople");
	 $s = "SELECT * from registeruser where peopleid = '$t'";
	 $result = mysqli_query($c,$s);
	 
	 $count= mysqli_num_rows($result);
	 if($count !=0){
		 
	 $c = mysqli_connect("localhost","root","","chattingpeople");
	 mysqli_query($c,$s);
	 
	 // sql to delete a record
	 $s = "DELETE FROM registeruser WHERE peopleid = '$t'";
	 if ($c->query($s) === TRUE) {
		  
	 }
	 ?>
    
	<script>
    location.reload();
    </script>

     <?php 
	 }
	 else
	 {
	 $msg5 = "ID Not Found or Deleted";
	 }
	 }
	 
     ?>
     
	  <script>
      boxscrool.scrollBy(0, 500);
      </script>

        </div>
          <table width="599" border="0">
            <tr>
              <th width="17" align="left" scope="col">
              <input name="txtid" type="text" id="txtid" size="3">
              <th width="572" align="left" class="bluetext" scope="col"><input type="submit" name="deleteuser" id="deleteuser"  value="Delete">                <?php echo $msg5;?></th>
            </tr>
        </table></th>
      </tr>
    </table>
    <p>&nbsp;</p>
  </form>
</div>
</body>
</html>
