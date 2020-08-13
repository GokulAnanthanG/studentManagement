<?php
 $con=new mysqli("localhost","root","","login");
if($con->connect_error){
    echo"ERROR";
}
$sql="select * from subject where department='{$_POST["val"]}' ";
$res=$con->query($sql);
echo"<option value=''></option>";
while($row=$res->fetch_object()){
    echo"<option value='$row->subject'>$row->subject</option>";

}
?>