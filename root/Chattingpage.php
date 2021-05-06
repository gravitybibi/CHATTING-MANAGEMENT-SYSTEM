<?php

	session_start();
	if(!isset($_SESSION['u'])){
			header("location:Loginpage.php");
		}
?>

<title>chattingpage</title>
<style type="text/css">
.textboxcss {
	width: 450px;
}
.cssborderline {
	border: thin none #000;
}
.scrool {
	overflow: scroll;
	visibility: inherit;
	height: 300px;
	width: 800px;
	left: 501px;
	top: 86px;
	border-top-style: inset;
	border-right-style: inset;
	border-bottom-style: inset;
	border-left-style: inset;
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	font-style: normal;
	text-align: left;
	text-decoration: none;
	white-space: normal;
	color: #00F;
}
.usercss {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #00F;
}
.redtxt {
	font-family: Arial, Helvetica, sans-serif;
	color: #F00;
}
</style>
</head>
<body>

		<?php

		if($_SERVER['REQUEST_METHOD']=="POST"){
			if(isset($_POST['send'])){
				
			$d =  $_POST['chattingtext'];
			
			$c = mysqli_connect("localhost","root","","chattingpeople");
			$s = "INSERT INTO historychat (user_name, textsend) VALUES ('$_SESSION[u]','$d')";
			$result = mysqli_query($c,$s);
			}
			}
			
		?>

<table width="1363" height="473" border="0" align="center">
  <tr>
    <th width="966" height="467" align="center" scope="col"><form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p>&nbsp;</p>
      <p>Chatting System</p>
      <p><a href="index.php">Home</a> <a href="Settingpage.php">Setting</a> <a href="logout.php">Logout</a></p>
      <table width="806" border="0">
        <tr>
          <th width="97" align="right" scope="col"><label for="txtviewprofile"></label></th>
          <th width="600" align="right" class="redtxt" scope="col">
          
		  <?php
		  
		  $msg1="";
		  $msgusername="";
		  $msguseremail="";
          $msgusergender= "";
          $msguserage= "";
          $msguseroccupation= "";
          $msguserstatus= "";
		  
	if(isset($_POST['btnsearch'])){
	$z =  $_POST['txtviewprofile'];
	
	
	$c = mysqli_connect("localhost","root","","chattingpeople");
	$s = "select * from registeruser where user_name = '$z'";
	$result = mysqli_query($c,$s);
	
	$count= mysqli_num_rows($result);
	if($count !=0){
		
	// output data of each row
	while($row = $result->fetch_assoc()){
	
	$msgusername= $row["user_name"];
	$msguseremail= $row["user_email"];
	$msgusergender= $row["user_gender"];
	$msguserage= $row["user_age"];
	$msguseroccupation= $row["user_occupation"];
	$msguserstatus= $row["user_status"];
	}
	}
	else
	{
	$msg1= "No User Found";
	}
	}
	?>
    
	<?php echo $msg1;?>
		  
 <input type="submit" name="btnsearch" id="btnsearch" value="Search"></th>
          <th width="95" align="right" scope="col"><input name="txtviewprofile" type="text" id="txtviewprofile" size="20" placeholder="Typing Name to view profile"></th>
        </tr>
      </table>
      <label for="txtid"></label>
      <div class="scrool" id="chatbox">
        <p>
          <?php
	  
	  $c = mysqli_connect("localhost","root","","chattingpeople");
	  $s = "SELECT user_name, textsend FROM historychat";
	  $result = mysqli_query($c,$s);
	  
	  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      echo  "<br>". $row["user_name"]. ": " . $row["textsend"] ."";
      }
	  ?>
      
	  <script>
      chatbox.scrollBy(0, 500);
      </script>
      
      <?php
      } else {
      echo "0 result";
      }
	  $c->close();
	   ?>
       
       
      </p>
      </div>
      <table width="874" border="0" align="center">
        <tr>
          <th colspan="3" scope="col"><label for="chattingboxt"></label>
            <div align="left"></div></th>
          <th width="130" scope="col"><div align="left"></div></th>
        </tr>
        <tr>
          <th width="93" align="right" class="usercss" scope="col">User ID:</th>
          <th width="183" align="left" class="usercss" scope="col"><span class="redtxt">
       <?php
		
	  $c = mysqli_connect("localhost","root","","chattingpeople");
	  $s = "SELECT peopleid FROM registeruser WHERE user_name = '$_SESSION[u]'";
	  $result = mysqli_query($c,$s);
	  
	  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
		  
      echo "".$row["peopleid"] ."";
	   }
      } else {
      echo  "Your ID Deleted";
      }
	  $c->close();
	  
	    ?>
          </span></th>
          <th width="450" align="right" scope="col"><input name="chattingtext" type="text" class="textboxcss" id="chattingtext"/></th>
          <th align="left" scope="col"><input type="submit" name="send" id="send" value="Send"/>
            <input type="reset" name="Clear" id="Clear" value="Clear" /></th>
        </tr>
      </table>
    </form></th>
    <td width="304" align="center" class="Border1"><table width="304" height="208" border="1" class="cssborderline">
      <tr class="cssborderline">
        <th height="150" scope="col"><table width="282" border="0">
        View Profile
          <tr>
            <td width="105" height="27"><div align="right">Name:</div></td>
            <td width="167" class="usercss"><?php echo $msgusername;?></td>
          </tr>
          <tr>
            <td height="21" align="right">Email::</td>
            <td class="usercss"><?php echo $msguseremail;?></td>
          </tr>
          <tr>
            <td height="26"><div align="right">Gender:</div></td>
            <td class="usercss"><?php echo $msgusergender;?></td>
          </tr>
          <tr>
            <td height="21"><div align="right">Age:</div></td>
            <td class="usercss"><?php echo $msguserage;?></td>
          </tr>
          <tr>
            <td height="21"><div align="right">Occupation:</div></td>
            <td class="usercss"><?php echo $msguseroccupation;?></td>
          </tr>
          <tr>
            <td height="21"><div align="right">Status:</div></td>
            <td class="usercss"><?php echo $msguserstatus;?></td>
          </tr>
        </table></th>
      </tr>
    </table></td>
    <th width="79" align="center" valign="top" scope="col">&nbsp;</th>
			
  </tr>
</table>
</body>
</html>
