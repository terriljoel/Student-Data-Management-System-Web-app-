<?php

$usn=$_POST['usn'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project');
$q="select * from student where usn='".$usn."' ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if(!$num==0)
{
	
session_start();
$_SESSION['varname']=$usn;
header('location:formmain.html');
}
else

{
	echo "<script>
	window.location.href='form1.html';
	alert('USN not found');
	
	</script>	";  
	
//	echo("<h1 style=color:red>USN not found</h1>");
}



?>