<?php

$login=$_POST['login'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project');

$q="select * from login where login='".$login."' and password='".$password."'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);



if($num==1)
{
	header('location:form1.html');
	
}
else
{
	//echo("<h1 style=color:red >Invalid username and password</h1>");
	echo "<script>
	window.location.href='main.html';
	alert('Invalid username and password');

	</script> ";
}

mysqli_close($con);
?>