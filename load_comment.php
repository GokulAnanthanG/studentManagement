<?php
session_start();
 $con=new mysqli('localhost','root','','login');

$sql=("SELECT * FROM comment order by ID DESC");
$res=$con->query($sql);
if($res->num_rows>0){
  echo"<table class='table'>";
  
  
  
while($row=$res->fetch_object()){
  echo"<tr>";
  echo"<td><b class='b'>$row->name</b></td>";

  echo"<td>$row->comment</td>";
  
  echo"<td>$row->log</td>";
   echo"<td><button type='button'  class='btn btn-sm btn-danger cdel' cid='$row->id'><i title='Delete' class='fa fa-trash'></i></button></td>";
   
  echo"</tr>";
}
echo"</table>";
}
else{
  echo"No record found";
}
?>