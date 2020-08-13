<?php
session_start();
$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    
    echo"error";
}
 if($_POST["comment"]!=""){
 $sql=" INSERT  INTO  comment(name,comment,log) values('{$_SESSION["name"]}','{$_POST["comment"]}',now() )";
if($con->query($sql)){
    echo"<i class='fa fa-messenger'></i>Added";

}
else{
    echo"Error on sending mesage";
}
 }
 else{
     echo"Empty Messages Not Allowed";
 }
 
?>