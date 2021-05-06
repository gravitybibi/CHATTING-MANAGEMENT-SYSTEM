<head>
<title>Loginforadmin</title>
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
			$w =  $_POST['txtadminpass'];
			
			$c = mysqli_connect("localhost","root","","chattingpeople");
			$s = "select * from management where admin_user = '$w'";
			$result = mysqli_query($c,$s);
			$count= mysqli_num_rows($result);
			if($count !=0){
				
			?>
            
            <script>
			window.location="Adminpage.php";
			</script>
            
			<?php
			
			}
			else{
				
				$msg1= "Incorrect Password";
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
      <p align="center">LOGIN FOR ADMIN PAGE </p>
      <div align="center">
        <table width="381" border="0">
          <tr>
            <td width="73"><label for="txtadminpass">Password:</label></td>
            <td width="200"><input type="password" name="txtadminpass" id="txtadminpass" required></td>
          </tr>
        </table>
        <table width="384" border="0">
          <tr>
            <td width="145"><div align="right">
              <input type="submit" name="login2" id="login2" value="Login"></a>
              </div></td>
            <td width="207" class="redtext"><input type="reset" name="clear" id="clear4" value="clear"> 
              <?php echo $msg1; ?></td>
            </tr>
        </table>
      </div>
      <p>
        <label for="txtadminpass"><br>
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
