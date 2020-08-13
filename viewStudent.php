
  
 <?php
 $con=new mysqli('localhost','root','','login');

$sql=("SELECT * FROM students where id='{$_POST['view']}'");
$result=$con->query($sql);
if($result->num_rows>0){
    echo"<table class='table table-striped'>";
    while($row=$result->fetch_object()){

      echo"<tr>";
      echo"<img width='100px' height='100px' src='data:image;base64,$row->img'>";
       echo"</tr>";

    echo"<tr>";
    echo"<th>D.O.B<th/>";
    echo"<td>$row->day/$row->month/$row->year<td/>";
    echo"</tr>";
     
    echo"<tr>";
    
  
      echo"<th>Father Pno<th/>";
    echo"<td>$row->fpno<td/>";
    echo"</tr>";
     

    echo"<th>Email<th/>";
    echo"<td>$row->email<td/>";
    echo"</tr>";
     

    echo"<th>Department<th/>";
    echo"<td>$row->department<td/>";
    echo"</tr>";
   

    echo"<th>Joined Year<th/>";
    echo"<td>$row->joinedYear<td/>";
    echo"</tr>";
    

    echo"<th>City<th/>";
    echo"<td>$row->city<td/>";
    echo"</tr>";
    echo"<th>Pincode<th/>";
    echo"<td>$row->pincode<td/>";
    echo"</tr>";
   
    }
   echo "</table>";
}
else
echo"<center><h3>Profile not found</h3></center>"
 ?>
 