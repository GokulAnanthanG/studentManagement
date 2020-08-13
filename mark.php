<?php
 $con=new mysqli('localhost','root','','login');
$rollNo=$_POST["rollNo"];
$name=$_POST["name"];
$department=$_POST["department"];
$section=$_POST["section"];
$sub1=$_POST["subject1"];
$sub2=$_POST["subject2"];
$sub3=$_POST["subject3"];
$sub4=$_POST["subject4"];
$sub5=$_POST["subject5"];
$sub6=$_POST["subject6"];
$mark1=$_POST["mark1"];
$mark2=$_POST["mark2"];
$mark3=$_POST["mark3"];
$mark4=$_POST["mark4"];
$mark5=$_POST["mark5"];
$mark6=$_POST["mark6"];

$sql="INSERT INTO mark(rollNo,name,department,section,subject1,subject2,subject3,subject4,subject5,subject6,mark1,mark2,mark3,mark4,mark5,mark6) values('$rollNo ','$name ','$department ','$section ','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$mark1','$mark2','$mark3','$mark4','$mark5','$mark6') ";

if($con->query($sql)){
    echo"Mark added for ".$_POST["rollNo"];
}
else
echo"Somthing went wrong";
 ?>