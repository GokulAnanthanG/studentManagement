<?php
$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    echo"error";
}
$ename=$_POST["ename"];
$day=$_POST["day"];
$month=$_POST["month"];
$year=$_POST["year"];
$class=$_POST["class"];
$section=$_POST["section"];
$session=$_POST["session"];
 if($ename!=""&&$day!=""&&$month!=""&&$year!=""&&$class!=""&&$section!=""&&$session!=""){
$sql=" INSERT  INTO   exam(ename,day,month,year,class,section,session) values('{$_POST['ename']}','{$_POST['day']}','{$_POST['month']}','{$_POST['year']}','{$_POST['class']}','{$_POST['section']}','{$_POST['session']}')";
if($con->query($sql)){
    echo"Exam Seted";

}
else{
    echo"Error Occured";
}
}
else{
    echo"All feiled required";
}
?>