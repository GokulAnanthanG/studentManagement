<?php
 $conn=new mysqli('localhost','root','','login');
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8text">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bot.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    <title>Login</title>
    <style>
    
    i{
        color:blue;
    }
    input{
 
     }
     .error{
         color:red;
        
         width:200px;
         height:30px;
     }
    </style>
</head>
<body>


<div class="container  ">
   <br><br><br>
    <div class="col-md-12">
    <div class="col-md-4"></div>
    <center>
    <div class="col-md-4">
    <div><img src="ssb.png" width="350px" alt=""></div></div></center>
    <div class="col-md-4"></div>   
    </div>



 <div class="col-md-12">
 
 <br><br> <br> <br>
 <div class="col-md-4"></div>
 <div class="col-md-4">
 <h3 style="color:blue;font-family:algerian">Login</h3>
 <br> 
 <form method="post" action="">
 <div class="form-group">
 
 <label for=""><i class="fa fa-user" aria-hidden="true"></i> </label>
 <input type="text" placeholder="name" autocomplete="off" name="name"   class="form-control">
 </div>
 <div class="form-group">
 
 <label for=""><i class="fa fa-key" aria-hidden="true"></i> </label>
 <input type="password" name="pass"  placeholder="password"   class="form-control">
 </div>
 <div class="form-group">
 
  
 <input type="submit" name="submit" class="form-control btn btn-primary">
 </div>
 </form>
 </div>
 <div class="col-md-4"></div>
 </div>

  
 <?php
   
$type1="Admin";
$type2="Staff";
$type3="Student";

     $conn=new mysqli('localhost','root','','login');
      
     if(isset($_POST['submit'])){
         
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        if($name!=""&&$pass!=""){
        $sql="SELECT  name,pass FROM user where name='$name'AND pass='$pass' ";
        $result=$conn->query($sql);
        $sql="SELECT  name,pass FROM staff1 where name='$name'AND pass='$pass' ";
        $result1=$conn->query($sql);
        $sql="SELECT  name,pass FROM students where name='$name'AND pass='$pass' ";
        $result2=$conn->query($sql);
    if($result->num_rows==1){
        $sqli="insert into loginDetail(type,name,log) value('$type1','$name',now())";
        $conn->query($sqli);
        $ro=$result->fetch_object();
        $_SESSION['name']=$ro->name;
        $_SESSION['pass']=$ro->pass;
        echo"<script>window.open('home.php','_self')</script>";
    //    header("location:home.php");
        
        
    }
   else if($result1->num_rows==1){
    $sqli="insert into loginDetail(type,name,log) value('$type2','$name',now())";
    $conn->query($sqli);
    $ro=$result1->fetch_object();
    $_SESSION['name']=$ro->name;
    $_SESSION['pass']=$ro->pass;
        echo"<script>window.open('staff_home.php','_self')</script>";
    //    header("location:home.php");
        
        
    }
    else if($result2->num_rows==1){
        $sqli="insert into loginDetail(type,name,log) value('$type3','$name',now())";
        $conn->query($sqli);
        $ro=$result2->fetch_object();
        $_SESSION['name']=$ro->name;
        $_SESSION['pass']=$ro->pass;
            echo"<script>window.open('student_home.php','_self')</script>";
        //    header("location:home.php");
            
            
        }
    else{
        echo"<center><div class='error'>INVALID</div></center>";
    }
}
else{
    echo"<br>><center><div class='error'>All feiled required</div></center>";
}
    }
    
  
     ?>
     

    </div>




    <center><div id="footer" style="margin-top:180px"> <p align="center">&copy;SSB 2020</p></div></center>
</body>
<script>
$(document).ready(function(){
    $(".error").delay("slow").fadeOut("slow");
})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>