<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project');

$msc1=$_POST['msc1'];
$msc2=$_POST['msc2'];
$see=$_POST['see'];
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
session_start();
$usn=$_SESSION['varname'];
if($name!='nochange')
{
	mysqli_query($con,"update student set name='$name' where usn='$usn'");
}
if($age!='nochange')
{
	if($age<16 || $age >91)
	{
		echo "<script>
		window.location.href='updateform.html';
		alert('Invalid age');
		
		</script> ";
	}
	else{
	mysqli_query($con,"update student set age='$age' where usn='$usn'");
	}
}
if($section!='n')
{
	mysqli_query($con,"update student set section='$section' where usn='$usn'");
}
if($sex!='n')
{
	mysqli_query($con,"update student set sex='$sex' where usn='$usn'");
}
if($department!='n')
{
	mysqli_query($con,"update student set department='$department' where usn='$usn'");
}
if($bdate!='nochange')
{
	mysqli_query($con,"update student set birthdate='$bdate' where usn='$usn'");
}
if($sem!='n')
{
	mysqli_query($con,"update student set sem='$sem' where usn='$usn'");
}
if($msc1!='nochange')
{
	if($msc1<0 || $msc1>20)
	{
		echo "<script>
		window.location.href='updateform.html';
		alert('Invalid marks');
	 
		</script>	"; 
		
	}
	mysqli_query($con,"update exam set msc1='$msc1' where usn='$usn'");
}
if($msc2!='nochange')
{
	
		if($msc2<0 || $msc2>20)
		{
			echo "<script>
			window.location.href='updateform.html';
			alert('Invalid marks');
		 
			</script>	"; 
		
		}
	mysqli_query($con,"update exam set msc2='$msc2' where usn='$usn'");
}
if($see!='nochange')
{
	if($see<0 || $see>100)
	{
		echo "<script>
		window.location.href='updateform.html';
		alert('Invalid marks');
	 
		</script>	"; 
		
	}
	mysqli_query($con,"update exam set see='$see' where usn='$usn'");
}

if($coursenumber!='nochange')
{
	if($coursenumber<=0 || $coursenumber>40 )
	{
		echo "<script>
		window.location.href='updateform.html';
		alert('course number should be between 1 and 40');
	 
		</script>	"; 
	
	}
	mysqli_query($con,"update enroll set course_no='$coursenumber' where usn='$usn'");
}
if($coursename!='nochange')
{
	mysqli_query($con,"update enroll set course_name='$coursename' where usn='$usn'");
}

if($adate!='nochange')
{
	mysqli_query($con,"update admission set admission_date='$adate' where usn='$usn'");
}
if($athrough!='n')
{
	mysqli_query($con,"update admission set admission_through='$athrough' where usn='$usn'");
}
if($pmethod!='n')
{
	mysqli_query($con,"update admission set  paymentmethod='$pmethod' where usn='$usn'");
}
if($afee!='nochange')
{
	if($afee<0)
	{
		echo "<script>
		window.location.href='updateform.html';
		alert('Fee cannot be negative');
	 
		</script>	"; 
	
	}
	mysqli_query($con,"update admission set fee='$afee' where usn='$usn'");
}
//echo "<h1 style=color:green  style=margin-top:250px>Updated Sucessfully</h1>";
echo "<script>
window.location.href='formmain.html';
alert('Updated successfully');

</script> ";

?>