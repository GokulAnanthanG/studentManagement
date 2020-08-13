<?php
$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    echo"error";
}
$sql=("SELECT * FROM mark WHERE name LIKE '{$_POST["name"]}%'");
$res=$con->query($sql);
if($res->num_rows>=1){
 
 while($row=$res->fetch_object()){

    echo"<table class='table'>";
    echo"<tr>";
    echo"<th>Roll No</th>";
    echo"<th>Name</th>";
    echo"<th>Department</th>";
    echo"<th> Section</th>";
    echo"<th title='Subject1'>$row->subject1</th>";
    echo"<th title='Subject2'> $row->subject2</th>";
    echo"<th title='Subject3'> $row->subject3</th>";
    echo"<th title='Subject4'> $row->subject4</th>";
    echo"<th title='Subject5'> $row->subject5</th>";
    echo"<th title='Subject6'> $row->subject6</th>";
   
    echo"</tr>";
   

    echo"<tr>";
    echo"<td>$row->rollNo</td>";

    echo"<td>$row->name</td>";
    echo"<td>$row->department</td>";
    echo"<td>$row->section</td>";
    echo"<td>$row->mark1</td>";
    echo"<td>$row->mark2</td>";
    echo"<td>$row->mark3</td>";
    echo"<td>$row->mark4</td>";
    echo"<td>$row->mark5</td>";
    echo"<td>$row->mark6</td>";
 
    echo"<td><button title='Edit Mark' class='btn btn-sm btn-primary view' sid='$row->id'><i  class='fa fa-edit'></i></button></td>";
    echo"<td><button title='Delete' class='btn btn-sm btn-danger del' sid='$row->id'><i  class='fa fa-trash'></i></button></td>";
     
    echo"</tr>";
 }
 echo"</table>";
}
else{
    echo"No record found";
}