<?php
 $con=new mysqli('localhost','root','','login');
 session_start();
if(!isset($_SESSION['name'])){
  echo"<script>window.open('login.php','_self')</script>";
  
}
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8text">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Edit profile</title>
    <style>
    /* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color:#0269A4;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    
    .t1{
        color:white;
    }
    .t2{
        float:right;
        color:white;
        
    }
    #header{
        background-color:#0269A4;
        width:100%;
        height:100px;
        font-size:20px;
        line-height:100px;
        font-family:Times New Roman;
        border:non;
    }
    #icon{
        font-size:40px;
        text-align:center;
        color:#0269A4;
    }
    table tr,td{
        padding:35px;
        font-size:18px;
          font-family:courier M;
    }
    .success{
        color:green;
    }
    .error{
        color:red;
    }
    </style>
</head>
<body>
<nav id="header" class="navbar navbar-inverse navbar-fixed-top">
 &nbsp; <span class="t1">SSB</span> <span class="t2">Collage Management System</span> &nbsp;
</nav>
    
    <br> <br><br><br> <br> &nbsp;
<!-- The sidebar -->
<div class="sidebar">
<p id="icon"><i title="staff" class="fa fa-user" aria-hidden="true"></i></p>
  <a  href="staff_home.php">Home</a>
  <a class="active" href="profile.php">Profile&nbsp;<i class="fa fa-user-circle-o"></i></a>

  <a href="staff_news.php">News</a>
 
  <a href="#contact">Contact</a>
 
  <a href="setting.php"> Setting  &nbsp;  <i class="fa  fa-gear"></i></a>
  <a href="logout.php">Logout &nbsp;<i class="fa fa-sign-out"></i></a>
</div>

<!-- Page content -->
<div class="content">
   
<div class="container">
<div class="col-md-12">
<div class="col-md-2"></div>
<div class="col-md-8"><h1 style="font-family: Monaco;color:#0269A4">
  <?php 
 print_r($_SESSION['name']) ;
  ?> 
  
Profile&nbsp;<i class="fa fa-edit"></i>

 </h1><br><br>
<p>Please fill all the feild</p>
 <?php
 

if(isset($_POST["submit"])){

  $sname=$_SESSION["name"];
  $spass=$_SESSION["pass"];
 $age=$_POST["age"];
 $qual=$_POST["qual"];
 $address=$_POST["address"];
 $email=$_POST["email"];
 $pno=$_POST["pno"];

    $sql="update staff1 set  age='$age',qual='$qual',address='$address' ,email='$email',pno='$pno' where   pass='$spass' AND name='$sname' ";     if($con->query($sql)){
echo"<center><p class='success'>Profile Updated please check your </p><a href='profile.php'> <i class='fa fa-user'></i></a></center>";

}
else{
    echo"<p class='error' align='center'>Wrong Password<p/>";
}

}
 ?>
 <form action="" method="post">
  
  
 <div class="form-group">
 <label for="">Qualification</label>
 <input name="qual" type="text"  autocomplete="off"   class="form-control">
 </div>
 <div class="form-group">
 <label for="">Email</label>
 <input name="email" type="Email"  autocomplete="off"  class="form-control">
 </div>
 <div class="form-group">
 <label for="">Phone No</label>
 <input name="pno" type="text" autocomplete="off"   class="form-control">
 </div> 
 <div class="form-group">
 <label for="">Age</label>
 <input name="age" type="number"  autocomplete="off"   class="form-control">
 </div>
 <div class="form-group">
 <label for="">Address</label><br>
 <textarea name="address" cols="50"  autocomplete="off"   class="from-control"> </textarea>
  </div>
  <div class="form-group">
  <input name="submit" type="submit"  value="Edit" class="form-control btn btn-primary">
 </div>
 </form>
 </div>
</div>

</div>
<div class="col-md-2"></div>
 
 
 

</div>


 </div>   
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