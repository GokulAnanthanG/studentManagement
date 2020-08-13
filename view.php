
  
 <?php
 $con=new mysqli('localhost','root','','login');

$sql=("SELECT * FROM staff1 where id='{$_POST['view']}'");
$result=$con->query($sql);
if($result->num_rows>0){
    echo"<table class='table table-striped'>";
    while($row=$result->fetch_object()){
    echo"<tr>";
    echo"<th>Name<th/>";
    echo"<td>$row->name<td/>";
    echo"</tr>";
     
    echo"<tr>";
    
  
      echo"<th>Qualification<th/>";
    echo"<td>$row->qual<td/>";
    echo"</tr>";
     

    echo"<th>Email<th/>";
    echo"<td>$row->email<td/>";
    echo"</tr>";
     

    echo"<th>Phone No<th/>";
    echo"<td>$row->pno<td/>";
    echo"</tr>";
   

    echo"<th>Address<th/>";
    echo"<td>$row->address<td/>";
    echo"</tr>";
    

    echo"<th>Age<th/>";
    echo"<td>$row->age<td/>";
    echo"</tr>";
   
    }
   echo "</table>";
}
else
echo"<center><h3>Profile not found</h3></center>"
 ?>
 