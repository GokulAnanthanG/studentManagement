<?php

$con=new mysqli("localhost","root","","login");
if($con->connect_error){
    echo"Error";
}
 

$sql="update mark set  mark1='{$_POST["mark1"]}',mark2='{$_POST["mark2"]}',mark3='{$_POST["mark3"]}',mark4='{$_POST["mark4"]}',mark5='{$_POST["mark5"]}',mark6='{$_POST["mark6"]}' where   id=".$_POST["idNo"] ;   
  
if($con->query($sql)){
    echo"Student Mark Updated";

}
else{
    echo"Somthing Went wrong";
   
}

?>