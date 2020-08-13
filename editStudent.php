<?php

$con=new mysqli("localhost","root","","login");
if($con->connect_error){
    echo"Error";
}
 

$sql="update students set  name='{$_POST["name"]}',fatherName='{$_POST["fatherName"]}',day='{$_POST["day"]}' ,month='{$_POST["month"]}',year='{$_POST["year"]}',email='{$_POST["email"]}',pno='{$_POST["pno"]}',fpno='{$_POST["fpno"]}',bloodGroup='{$_POST["bloodGroup"]}',address='{$_POST["address"]}',gender='{$_POST["gender"]}',pincode='{$_POST["pincode"]}',department='{$_POST["department"]}',city='{$_POST["city"]}',rollNo='{$_POST["rollNo"]}',joinedYear='{$_POST["joinedYear"]}' where   rollNo=".$_POST["eRollNo"] ;   
  
if($con->query($sql)){
    echo"Student Details Updated";

}
else{
    echo"Student Details Updated";
   
}

?>