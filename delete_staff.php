<?php
 $con=new mysqli('localhost','root','','login');
 if($con->connect_error){
     echo"error";
 } 
    
        
          $sql="DELETE FROM  staff1  where id='{$_POST['id']}' ";      
      if($con->query($sql)){
        echo"Staff Removed";
 
      }
      

?>