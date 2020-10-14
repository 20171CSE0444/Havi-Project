<form method="post" action="#">
Username:- <input type="text" name="uname" > <br>

password:- <input type="text" name="pwd" > <br>

BirthDate- <input type="date" name="dob" > <br>

Email:<input type="email" name="email"></br>
Phone Number :<input type="number" name="pno"></br>
Alternate Phone Number:<input type="number" name="pno1"></br>
<input type="submit" name="submit" value="Register">
</form>
<?php
if(isset($_POST['submit']))
{
require "db.php";
$str = implode(",",$_POST['event']);
$result = mysql_query("insert into register values(0,'".$_POST['uname'] ."', '".$_POST['pwd'] ."', '".$_POST['dob'] ."', '".$_POST['email'] ."', '".$_POST['pno'] ."', '".$_POST['pno1'] ."','".$str."')") or die(mysql_error());

if($result)
	header('Location:login.php');
else
	echo "please try again to register";
}


?>