<?php
 error_reporting(0);
$con=new mysqli("localhost","root","","login");
if($con->connect_error){
    echo"Errot To FInd DAta Base";
}

 
 
$img=$_FILES["image"]["tmp_name"];
$name=$_FILES["image"]["name"];
$img=file_get_contents($img);
$img=base64_encode($img);

$name=$_POST["name"];
$fname=$_POST["fatherName"];
$day=$_POST["day"];
$month=$_POST["month"];
$year=$_POST["year"];
$email=$_POST["email"];
$pno=$_POST["pno"];
$fpno=$_POST["fpno"];
$bloodGroup=$_POST["bloodGroup"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$pincode=$_POST["pincode"];
$department=$_POST["department"];
$city=$_POST["city"];
$rollNo=$_POST["rollNo"];
$joinedYear=$_POST["joinedYear"];
$pass=$_POST["joinedYear"];

$sql="INSERT INTO students (name,img,fatherName,day,month,year,email,pno,fpno,bloodGroup,address,gender,pincode,department,city,rollNo,pass,joinedYear) VALUES  ('$name','$img','$fname','$day','$month','$year','$email','$pno','$fpno','$bloodGroup','$address','$gender','$pincode','$department','$city','$rollNo','$pass','$joinedYear')";
  if($con->query($sql)){
      
     echo"Student Added";
 }
 else{
     echo"Unable To Connect DATA Base";
 }
?>