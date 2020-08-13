<?php
$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    echo"error";
}
$name=$_POST["name"];
$fname=$name." ST";
$pas=$_POST["pass"];
$sal=$_POST["sal"];
$qual=$_POST["qual"];
if($name!=""&& $pas!=""&&$sal!=""&&$qual!=""){
$sql=" INSERT  INTO  staff1(name,pass,sal,qual) values('{$fname}','{$pas}','{$sal}','{$qual}')";
if($con->query($sql)){
    echo"Data Stored";

}
else{
    echo"Error Occured";
}
}
else{
    echo"All feiled required";
}
?>