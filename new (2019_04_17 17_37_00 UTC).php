<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project');
$usn=$_POST['usn'];
$name=$_POST['name'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$section=$_POST['section'];
$department=$_POST['department'];
$sem=$_POST['sem'];
$bdate=$_POST['bdate'];
$coursenumber=$_POST['coursenumber'];
$coursename=$_POST['coursename'];
$adate=$_POST['adate'];
$athrough=$_POST['athrough'];
$afee=$_POST['afee'];
$pmethod=$_POST['pmethod'];
if($age<16 || $age>91)
{
    echo "<script>
    window.location.href='form2.html';
    alert('Invalid age');
 
    </script>	"; 
    goto end;
}
if($afee<0)
{
    echo "<script>
    window.location.href='form2.html';
    alert('Fee cannot be negative');
 
    </script>	"; 
    goto end;
}

$q="insert into student(usn,name,age,section,sex,department,birthdate,sem)  values('$usn','$name','$age','$section','$sex','$department','$bdate','$sem')";
$i=mysqli_query($con,$q);
if($i==0)
{
   // echo "<h2 style=color:red>This usn already exists</h2>";
   echo "<script>
   window.location.href='form2.html';
   alert('USN already present');

   </script>	"; 
    goto end;
}


$p="insert into admission(usn,admission_date,admission_through,fee,paymentmethod) values('$usn','$adate','$athrough','$afee','$pmethod')";
mysqli_query($con,$p);

$r="insert into enroll(usn,course_no,course_name) values('$usn','$coursenumber','$coursename')";
mysqli_query($con,$r);

$p="insert into exam(usn) values('$usn')";
mysqli_query($con,$p);

session_start();
$_SESSION['varname']=$usn;


header('location:formmain.html');
end:

mysqli_close($con);

?>


