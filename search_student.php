<?php
$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    echo"error";
}
$sql=("SELECT * FROM students WHERE name LIKE '{$_POST["name"]}%'");
$res=$con->query($sql);
if($res->num_rows>=1){
 echo"<table class='table'>";
 echo"<tr>";
 echo"<th>Name</th>";
 echo"<th>Father Name</th>";
 echo"<th>Gender</th>";
  echo"<th>Phone No</th>";
 echo"<th>Blood Group</th>";
 echo"<th>Address</th>";
 echo"</tr>";

 while($row=$res->fetch_object()){
    echo"<tr><td>$row->name</td><td>$row->fatherName</td><td>$row->gender</td><td>$row->pno</td><td>$row->bloodGroup</td><td>$row->address</td><td><button title='view' class='btn btn-primary view' sid='$row->id'><i class='fa fa-eye'></i></button></td><td><button title='delete' class='btn btn-danger del'sid='$row->id' ><i class='fa fa-trash'></i></button></td> </tr>";
 }
 echo"</table>";
}
else{
    echo"No record found";
}