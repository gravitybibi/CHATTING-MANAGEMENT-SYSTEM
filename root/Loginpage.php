<?php
	session_start();
?>

<head>
<title>Log in</title>
<style type="text/css">
.redtext {
	color: #F00;
}
</style>
</head>

<body>

<?php
			
			$msg1="";
			
			if(isset($_POST['login2'])){	
			$q =  $_POST['txtname2'];
			$v =  $_POST['txtpassword2'];
			
			$c = mysqli_connect("localhost","root","","chattingpeople");
			$s = "select * from registeruser where user_name = '$q' AND user_password = '$v'";
			$result = mysqli_query($c,$s);
			
			$count= mysqli_num_rows($result);
			if($count !=0){
				$_SESSION['u'] = "$q";
			?>
            
            <script>
			window.location="Chattingpage.php";
			</script>
            
			<?php
			
			}
			else{
				
				$msg1= "Name and Password Do Not Match";
			}
			}
		
			?>
            
			

<p>&nbsp;</p>
<table width="1048" height="397" border="0">
  <tr>
    <td width="298" height="172">&nbsp;</td>
    <td width="740">&nbsp;</td>
  </tr>
  <tr>
    <td height="219">&nbsp;</td>
    <td><form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <p align="center">LOG IN PAGE </p>
      <div align="center">
        <table width="737" border="0">
          <tr>
            <td width="156" align="right"><label for="name5">Name :</label></td>
            <td width="250" class="redtext"><input type="text" name="txtname2" id="txtname2" required>
              <?php echo $msg1; ?></td>
            </tr>
          <tr>
            <td align="right"><label for="txtpassword2">Password:</label></td>
            <td><input type="password" name="txtpassword2" id="txtpassword2" required></td>
            </tr>
        </table>
        <table width="421" border="0">
          <tr>
            <td width="125"><div align="right"></a>
              </div></td>
            <td width="46" align="left"><input type="submit" name="login2" id="login2" value="Login"></td>
            <td width="236"><input type="reset" name="clear" id="clear4" value="clear"></td>
            </tr>
          </table>
      </div>
      <p>
        <label for="txtpassword2"><br>
        </label>
    </p>
      <p>&nbsp;</p>
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
