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
        <link rel="stylesheet" type="text/css" href="bot.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <title>profile</title>
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
  height: 600px;
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
    #men1{
  margin-left:55px;
}
#men2{
  margin-left:53px;
}
#men3{
  margin-left:10px;
}
#men4{
  margin-left:15px;
}
#men5{
  margin-left:38px;
}
#men6{
  margin-left:35px;
}
#men7{
  margin-left:31px;
}
#men8{
  margin-left:27px;
}
#men9{
  margin-left:31px;
}
#men10{
  margin-left:60px;
  font-size:20px;
}
#men11{
  margin-left:49px;
}
#men12{
  margin-left:49px;
}
#pro{
    margin-left:50px;
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
  <a  href="staff_home.php">Home   <i id="men1" class="fa fa-home"></i> </a>
  <a class="active"  href="profile.php">Profile&nbsp;<i id="pro" class="fa fa-user-circle-o"></i></a>
  <a href="staff_news.php">News   <i id="men2" class="fa fa-newspaper-o"></i></a>
   <a    href="staffAdd_mark.php">Add Mark <i id="men7" class="fa fa-plus"></i></a>
   <a   href="staffView_mark.php">View Mark <i id="men8" class="fa fa-eye"></i></a>
 <a href="staff_setting.php"> Setting     <i id="men11" class="fa  fa-gear"></i></a>  
  <a href="logout.php">Logout  <i id="men12" class="fa fa-sign-out"></i></a>
</div>

<!-- Page content -->
<div class="content">
   
<div class="container">
<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"><h1 style="font-family: Monaco;color:#0269A4">
  <?php 
 print_r($_SESSION['name']) ;
  ?> 
Profile&nbsp;<i class="fa fa-user"></i>

 </h1></div>
</div>

</div>

 
 
<br>
<div class="col-md-12">
<div class="col-md-4"></div>
<div class="col-md-4 text-center"> 
<center><i title="profile" style="font-size:40px;margin-right:75px;color:#0269A4;;" class="fa fa-user-circle-o"></i><br>
 <table style="margin-top:30px;" class="table table-striped">
  
 <?php
$sql=("SELECT * FROM staff1 where name='{$_SESSION['name']}'");
$result=$con->query($sql);
if($result->num_rows>=1){
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
}
else
echo"<center><h3>Profile not found</h3></center>"
 ?>
 </table>
 <a href="edit_profile.php"><button><i title="Edit" class="fa fa-edit"></i></button></a>
 </center>
</div>
<div class="col-md-4"></div>
</div>

</div>

<center><div><p>&copy;SSB 2020</p></div></center>

 </div>   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                
</html>