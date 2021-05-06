<?php
	session_start();
	if(!isset($_SESSION['u'])){
			header("location:Loginpage.php");
		}
?>

<head>
<title>Settingpages</title>
<style type="text/css">
.Border1 {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	border-top-color: #000;
	border-right-color: #000;
	border-bottom-color: #000;
	border-left-color: #000;
}
.redtext {
	color: #F00;
}
.bluetxt {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #00F;
}
</style>
</head>

<body>

<?php

$msg= "";
$msg1= "";
$msg6= "";
$msg2= "";
$msg3= "";
$msg4= "";
$msg5= "";
$msg7= "";

if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['submit3'])){
			$w =  $_POST['txtnameedit'];
			$q =  $_POST['txtpasswordedit'];
			$b =  $_POST['txtgender2'];
			$a =  $_POST['txtage'];
			$x =  $_POST['txtoccupation'];
			$l =  $_POST['txtstatus'];

			$c = mysqli_connect("localhost","root","","chattingpeople");
			$s = "UPDATE registeruser SET user_name = '$w', user_password = '$q', user_gender = '$b', user_age = '$a', user_occupation = 	                 '$x', user_status = '$l' where user_name = '".$_SESSION['u']."'";
		    $result = mysqli_query($c,$s);
			
			$msg= "Setting Succesfull";
			$msg7= "Please Logout and Login to take effect";
			$msg1= "$w";
			$msg6= "$q";
			$msg2= "$b";
			$msg3= "$a";
			$msg4= "$x";
			$msg5= "$l";
		}
		}
?>

<table width="1030" border="0">
  <tr>
    <td width="295" height="60"><div align="center"></div></td>
    <td width="237"><div align="center"><a href="index.php">Home</a></div></td>
    <td width="270"><div align="center"><a href="Chattingpage.php">Chatting</a></div>
      <div align="center"></div></td>
    <td width="210"><div align="center"><a href="logout.php">Logout</a></div></td>
  </tr>
</table>
<table width="1030" border="0">
  <tr>
    <td width="603">&nbsp;</td>
    <td width="417">SETTING PAGE</td>
  </tr>
</table>
<table width="1062" border="0">
  <tr>
    <td width="290" height="498">&nbsp;</td>
    <td width="437"><form name="form1" enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p align="left">
          <label for="insertpic"></label>
        </p>
        <table width="422" border="0">
          <tr>
            <td width="142" align="right">Profile</td>
            <td width="270" class="redtext"><?php echo $msg7; ?>&nbsp;</td>
          </tr>
        </table>
        <table width="423" border="0">
          <tr>
            <td width="142"><div align="right">Name</div></td>
            <td width="271"><input type="text" name="txtnameedit" id="nameedit2" required> </td>
          </tr>
          <tr>
            <td><div align="right">Password</div></td>
            <td><input type="text" name="txtpasswordedit" id="passwordedit2" required> </td>
          </tr>
          <tr>
            <td><div align="right">Gender</div></td>
            <td><label for="txtoccupation">
              <select name="txtgender2" id="txtgender2">
                <option>Male</option>
                <option>Female</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td height="24"><div align="right">Age</div></td>
            <td><label for="txtstatus">
              <select name="txtage" id="txtage">
                <option>12</option>
                <option>13</option>
                <option selected="selected">14</option>
                <option>15</option>
                <option>16</option>
                <option>18</option>
                <option>19</option>
                <option>20</option>
                <option>21</option>
                <option>22</option>
                <option>23</option>
                <option>24</option>
                <option>25</option>
                <option>26</option>
                <option>27</option>
                <option>28</option>
                <option>29</option>
                <option>30</option>
                <option>31</option>
                <option>32</option>
                <option>33</option>
                <option>34</option>
                <option>35</option>
                <option>36</option>
                <option>37</option>
                <option>38</option>
                <option>39</option>
                <option>40</option>
                <option>41</option>
                <option>42</option>
                <option>43</option>
                <option>44</option>
                <option>45</option>
                <option>46</option>
                <option>47</option>
                <option>48</option>
                <option>49</option>
                <option>50</option>
                <option>51</option>
                <option>51</option>
                <option>53</option>
                <option>54</option>
                <option>55</option>
                <option>56</option>
                <option>57</option>
                <option>58</option>
                <option>59</option>
                <option>60</option>
              </select>
            </label></td>
          </tr>
          <tr>
            <td height="24"><div align="right">Occupation</div></td>
            <td><input type="text" name="txtoccupation" id="txtoccupation" required></td>
          </tr>
          <tr>
            <td height="30"><div align="right">Status</div></td>
            <td><input type="text" name="txtstatus" id="txtstatus" required></td>
          </tr>
        </table>
        <table width="421" border="0">
          <tr>
            <td width="241"><div align="right" class="redtext">
              <?php echo $msg; ?>
             <input type="submit" name="submit3" id="submit3" value="Submit">
            </div></td>
            <td width="170"><input type="reset" name="clear4" id="clear4" value="Clear"></td>
          </tr>
        </table>
    </form>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="321"><table width="303" border="1" class="Border1">
      <tr>
        <td height="291"><table width="282" border="0">
          <tr>
              <td width="105" height="27"><div align="right">Name:</div></td>
              <td width="167" class="bluetxt"><?php echo $msg1; ?></td>
            </tr>
            <tr>
              <td height="21" align="right">Password:</td>
              <td class="bluetxt"><?php echo $msg6; ?></td>
            </tr>
            <tr>
              <td height="26"><div align="right">Gender:</div></td>
              <td class="bluetxt"><?php echo $msg2; ?></td>
            </tr>
            <tr>
              <td height="21"><div align="right">Age:</div></td>
              <td class="bluetxt"><?php echo $msg3; ?></td>
            </tr>
            <tr>
              <td height="21"><div align="right">Occupation:</div></td>
              <td class="bluetxt"><?php echo $msg4; ?></td>
            </tr>
            <tr>
              <td height="21"><div align="right">Status:</div></td>
              <td class="bluetxt"><?php echo $msg5; ?></td>
            </tr>
        </table></td>
      </tr>
    </table>
      <div align="center"></div>
    <div align="center"></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
