<?php
 $con=new mysqli('localhost','root','','login');
 if($con->connect_error){
     echo"error";
 } 
    
        
          $sql="DELETE FROM  exam  where id='{$_POST['eid']}' ";      
      if($con->query($sql)){
        echo"Exam Deleted";
 
      }
      

?>