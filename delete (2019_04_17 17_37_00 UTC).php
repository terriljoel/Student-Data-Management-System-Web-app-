<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project');
session_start();
$usn=$_SESSION['varname'];

$q="delete from exam where usn='$usn'";
$i=mysqli_query($con,$q);

$q="delete from enroll where usn='$usn'";
mysqli_query($con,$q);
$q="delete from admission where usn='$usn'";
mysqli_query($con,$q);
$q="delete from student where usn='$usn'";
mysqli_query($con,$q);
//echo "<h1 style=color:red >Record deleted sucessfully  -".$usn."</h1>";
mysqli_close($con);
echo "<script>
window.location.href='formmain.html';
alert('Deletion successfull');

</script> ";


?>