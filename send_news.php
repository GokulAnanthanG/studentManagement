<?php
$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    echo"error"; 
}
$mes=$_POST["mes"];
if($mes!=""){
$sql=" INSERT  INTO  message(message) values('{$_POST['mes']}')";
if($con->query($sql)){

   echo"Message Added";

}
else{
    echo"Error Occured";
}
}
else{
    echo"Enter the message";
}
?>