<?php
$temp;
$con=new mysqli("localhost","root","","login");
if($con->connect_error){
    echo"Error on connecting db";
}
$sql="SELECT * FROM students where rollNo='{$_POST["roll"]}' ";
$result=$con->query($sql);
if($result->num_rows>0){
    //echo"DATA HAVE";
    $res=$result->fetch_assoc();
 $temp =$res["department"];
 
 
    $res["ERROR"]=0;

}
else{
    echo"NO DATA";
    $res["ERROR"]=1;
}
 
echo json_encode($res);
?>