<?php
	session_start();
?>

<head>
<title>Register page</title>
<style type="text/css">
.redtext {
	color: #F00;
}
</style>
</head>

<body>

<?php

$msg="";

if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['Submit1'])){
			$a =  $_POST['nameuser'];
			$q =  $_POST['emailuser'];
			$b =  $_POST['passworduser'];

			$c = mysqli_connect("localhost","root","","chattingpeople");
			$s = "select * from registeruser where user_name = '$a'";
			$result = mysqli_query($c,$s);
			$count= mysqli_num_rows($result);
			
			if($count !=0){
			
			$msg= "User name already exist, try different user name";
			}
			
			else {
				
			$c = mysqli_connect("localhost","root","","chattingpeople");
			$s = "INSERT INTO registeruser (user_name, user_email, user_password) VALUES ('$a', '$q','$b')";
			$result = mysqli_query($c,$s);
			$msg= "Register is Succesful";
	
					
			}
			}
			}
	?>

<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="1002" border="0">
  <tr>
    <td width="504" height="180"><p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="468"><form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      REGISTRATION PAGE
        <table width="353" border="0">
        <tr> 
          <td width="66">Name:</td>
          <td width="277"><input name="nameuser" type="text"  id="nameuser" pattern=".{5,}" title="Must be more than 5 characters" required/></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="emailuser" id="emailuser"  /></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input name="passworduser" type="password" id="passworduser" pattern=".{4}" title="Must be 4 characters"/></td>
        </tr>
</table>
      <p class="redtext">
        <input type="submit" name="Submit1" id="Submit1" value="Submit" />
        <input type="reset" name="clear" id="clear" value="Clear" />
      <?php echo $msg; ?></p>
    </form>

    <a href="Loginpage.php"> <input type="submit" name="member" id="member" value="Already Register Click Here" /></t></a>
  </tr>
</table>
</body>
</html>
