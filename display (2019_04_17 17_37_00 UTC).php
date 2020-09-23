<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'project');
session_start();
$usn=$_SESSION['varname'];
$q="select * from student where usn='".$usn."'" ;
$result=mysqli_query($con,$q);

$row=mysqli_fetch_array($result);

echo "<h1 align=center style=color:blue;font-size:50><u>Student info</u></h1>";
echo "<body bgcolor=orange>";
echo "<table border=3px cellspacing=0 cellpadding=8 width=500 align=center>";

echo "<tr>";
echo "<th>Usn</th>";
echo "<td>$row[usn]</td>";
echo "</tr>";


echo "<tr>";
echo "<th>Name</th>";
echo "<td>$row[name]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Age</th>";
echo "<td>$row[age]</td>";
echo "</tr>";


echo "<tr>";
echo "<th>Section</th>";
echo "<td>$row[section]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Sex</th>";
echo "<td>$row[sex]</td>";
echo "</tr>";


echo "<tr>";
echo "<th>Department</th>";
echo "<td>$row[department]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Birthdate</th>";
echo "<td>$row[birthdate]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Sem</th>";
echo "<td>$row[sem]</td>";
echo "</tr>";

/*
echo "<h3>Usn :".$row['usn']."</h3>";
echo "<h3>Name :".$row['name']."</h3>";
echo "<h3>Age :".$row['age']."</h3>";
echo "<h3>Section :".$row['section']."</h3>";
echo "<h3>Sex :".$row['sex']."</h3>";
echo "<h3>Department :".$row['department']."</h3>";
echo "<h3>Birth date :".$row['birthdate']."</h3>";
echo "<h3>Sem :".$row['sem']."</h3>";  
*/

$q="select * from enroll where usn='".$usn."'" ;
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);

echo "<tr>";
echo "<th>Course Number</th>";
echo "<td>$row[course_no]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Course Name</th>";
echo "<td>$row[course_name]</td>";
echo "</tr>";
/*

echo "<h3>Course Number :".$row['course_no']."</h3>";
echo "<h3>Course Name :".$row['course_name']."</h3>";
*/



$q="select * from admission where usn='".$usn."'" ;
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);

/*
echo "<h3>Admission Date :".$row['admission_date']."</h3>";
echo "<h3>Admission Through :".$row['admission_through']."</h3>";
echo "<h3>Fee :".$row['fee']."</h3>";
echo "<h3>Payment method :".$row['paymentmethod']."</h3>";
*/

echo "<tr>";
echo "<th>Admission Date</th>";
echo "<td>$row[admission_date]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Admission Through</th>";
echo "<td>$row[admission_through]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Fee</th>";
echo "<td>$row[fee]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Payment Method</th>";
echo "<td>$row[paymentmethod]</td>";
echo "</tr>";



$q="select * from exam where usn='".$usn."'" ;
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);

/*
echo "<h3>Msc 1 :".$row['msc1']."</h3>";
echo "<h3>Msc 2 :".$row['msc2']."</h3>";
echo "<h3>SEE :".$row['see']."</h3>";

*/

echo "<tr>";
echo "<th>Msc 1</th>";
echo "<td>$row[msc1]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>Msc 2</th>";
echo "<td>$row[msc2]</td>";
echo "</tr>";

echo "<tr>";
echo "<th>SEE</th>";
echo "<td>$row[see]</td>";
echo "</tr>";


echo "</table>";
echo "</body>";


?>