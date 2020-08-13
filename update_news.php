<?php
 $con=new mysqli('localhost','root','','login');
 if($con->connect_error){
     echo"error";
 } 
    
       if($_POST["mes"]!=""){
          $sql="update message set message='{$_POST['mes']}' where id='{$_POST['id']}' ";      
      if($con->query($sql)){
        echo"Message Updated";
 
      }
      else{
      echo" Unable To Reach Database </div>";
      } 
 }
   else
   echo" All The Feilds Required </div>";

?>