<?php
$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    echo"error";
}
$sql=("SELECT * FROM staff1 WHERE name LIKE '{$_POST["name"]}%'");
$res=$con->query($sql);
if($res->num_rows>=1){
 echo"<table class='table'>";
 echo"<tr>";
 echo"<th>Name</th>";
 echo"<th>Password</th>";
 echo"<th>Salary</th>";
 echo"<th>Qualification</th>";
  
 echo"</tr>";

 while($row=$res->fetch_object()){
    echo"<tr>";
    echo"<td>$row->name</td>";
    echo"<td>$row->pass</td>";
    echo"<td>$row->sal</td>";
    echo"<td>$row->qual</td>";
    echo"<td><button class='btn btn-sm btn-primary view' sid='$row->id'><i title='view' class='fa fa-eye'></i></button></td>";
    echo"<td><button class='btn btn-sm btn-danger del' sid='$row->id'><i title='Delete' class='fa fa-trash'></i></button></td>";
     
    echo"</tr>";
 }
 echo"</table>";
}
else{
    echo"No record found";
}