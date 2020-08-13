<?php
 $conn=new mysqli('localhost','root','','login');
 session_start();
if(!isset($_SESSION['name'])){
loaction('http://localhost/student%20management%20system/login.php');
  
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>View Staff</title>
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
  height: 650px;
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
    #men1{
  margin-left:55px;
}
#men2{
  margin-left:55px;
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
  margin-left:36px;
}
#men8{
  margin-left:31px;
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
    </style>
</head>
<body>
<nav id="header" class="navbar navbar-inverse navbar-fixed-top">
 &nbsp; <span class="t1">SSB</span> <span class="t2">Student Management System</span> &nbsp;
</nav>
    
    <br> <br><br><br>   &nbsp;
<!-- The sidebar -->
<div class="sidebar">
<p title="Admin" id="icon"><i class="fa fa-user-secret" aria-hidden="true"></i></p>
  <a  href="home.php">Home   <i id="men1" class="fa fa-home"></i> </a>
  <a href="news.php">News   <i id="men2" class="fa fa-newspaper-o"></i></a>
  <a href="add_student.php">Add Students <i id="men3" class="fa fa-user-plus"></i></a>
  <a href="view_student.php">view Student <i id="men4"  class="fa fa-eye"></i></a>
  <a href="add_staff.php">Add Staff <i id="men5" class="fa fa-plus"></i></a>
   <a class="active" href="view_staff.php">view Staff <i id="men6" class="fa fa-eye"></i></a>
   <a   href="add_mark.php">Add Mark <i id="men7" class="fa fa-plus"></i></a>
   <a   href="view_mark.php">View Mark <i id="men8" class="fa fa-eye"></i></a>
  <a href="add_news.php">Add News <i id="men9" class="fa fa-newspaper-o"></i></a>
 <a href="setting.php"> Setting     <i id="men11" class="fa  fa-gear"></i></a>
  <a href="more.php">More <i id="men10">...</i> </a>
  <a href="logout.php">Logout  <i id="men12" class="fa fa-sign-out"></i></a>
</div>

<!-- Page content -->
<div class="content">
   
<div class="container">
<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"><h1 style="font-family: Monaco;color:#0269A4"> Staff Detail

 </h1></div>
</div>

</div>

 
<br>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"> 
<p style="font-size:17px;">In here you can view the staff detail</p>

</div>
</div>

<br><br><br>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-4"> 
<p style="font-size:17px;">Enter Staff Name</p>
<form id="frm" class="form" action="" type="post">
<div class="form-group">
<input type="text" id="search" name="name" autocomplete="off" placeholder="Staff name" class="form-control">
<input id="id" name="id" type="hidden">
<input id="view" name="view" type="hidden">
<br><button id="btn" type="button"  class="btn btn-primary btn">Clear</button>
</div>

</form>
<div id="viewStaff"></div>
</div>
<center>
<div class="col-md-7" id="dis"></div></center>
</div>





</div>

<center><div><p>&copy;SSB 2020</p></div></center>

 </div>   
</body>
<script>
$(document).ready(function(){

 $(document).on('click','.view',function(){
    var view=$(this);
    var vid=view.attr('sid');
    $("#view").val(vid);
    $.ajax({
url:"view.php",
type:"post",
data:$("#frm").serialize(),
success:function(d){
    $("#viewStaff").html(d);
    
}
});
 }) 
   


  $(document).on('click','.del',function(){
    var permission=confirm("Are you sure want to delete the staff data");
    if(permission){
     var del=$(this);
     var id=del.attr('sid');
     $("#id").val(id);
     $.ajax({
url:"delete_staff.php",
type:"post",
data:$("#frm").serialize(),
success:function(d){
    alert(d);
    location.reload();
}
});
    }
  });
   
$("#search").keyup(function(){
  
  var txt=$("#search").val();
   if(txt!=""){
    $.ajax({
url:"search.php",
type:"post",
data:$("#frm").serialize(),
success:function(d){
    $("#dis").html(d)
    
}
});
    //post
   }//if

$("#btn").click(function(){
  $("#search").val("")
})

});
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
       
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="navbar-script.js"></script>         
</html>