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

    <title>View Mark</title>
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
  height: 500px;
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
    .editform{
      visibility:hidden;
    }
    table td{
      padding:10px;
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
 &nbsp; <span class="t1">SSB</span> <span class="t2">Student Management System</span> &nbsp;
</nav>
    
    <br> <br><br><br><br>   &nbsp;
<!-- The sidebar -->
<div class="sidebar">
<p id="icon"><i title="staff" class="fa fa-user" aria-hidden="true"></i></p>
  <a  href="staff_home.php">Home   <i id="men1" class="fa fa-home"></i> </a>
  <a  href="profile.php">Profile&nbsp;<i id="pro" class="fa fa-user-circle-o"></i></a>
  <a href="staff_news.php">News   <i id="men2" class="fa fa-newspaper-o"></i></a>
   <a   href="staffAdd_mark.php">Add Mark <i id="men7" class="fa fa-plus"></i></a>
   <a class="active"   href="staffView_mark.php">View Mark <i id="men8" class="fa fa-eye"></i></a>
 <a href="staff_setting.php"> Setting     <i id="men11" class="fa  fa-gear"></i></a>  
  <a href="logout.php">Logout  <i id="men12" class="fa fa-sign-out"></i></a>
</div>

<!-- Page content -->
<div class="content">
   
<div class="container">
<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"><h1 style="font-family: Monaco;color:#0269A4"> Mark Detail

 </h1></div>
</div>

</div>

 
<br>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"> 
<p style="font-size:17px;">In here you can view the mark detail</p>

</div>
</div>

<br><br><br>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-4"> 
<p style="font-size:17px;">Enter Student Name</p>
<form id="frm" class="form" action="" type="post">
<div class="form-group">
<input type="text" id="search" name="name" autocomplete="off" placeholder="Staff name" class="form-control">
<input id="id" name="id" type="hidden">
<input id="view" name="view" type="hidden">
<br><button id="btn" type="button"  class="btn btn-primary btn">Clear</button>
</div>

</form>
<div id="editMark">
<div class="editform">
<form action="" id="mark" method="post">
 <table>
 
<tr>
<td>
<input type="text" name="idNo" id="idNo">
</td>
</tr>  
   
 <tr> 
 <td><label for="">Subject</label>
  
 </td>

 <td><label for="">Mark</label> 
 <input type="text" id="mark1" name="mark1" autocomplete="off" class="form-control"></td>
 </tr>
 
  
 <tr> 
 <td><label for="">Subject 2</label>
  
 </td>

 <td><label for="">Mark</label> 
 <input type="text" id="mark2" name="mark2" autocomplete="off" class="form-control"></td>
 </tr>


 <tr> 
 <td><label for="">Subject 3</label>
  
 </td>

 <td><label for="">Mark</label> 
 <input type="text" id="mark3" name="mark3" autocomplete="off" class="form-control"></td>
 </tr>


 <tr> 
 <td><label for="">Subject 4</label>
  
 </td>

 <td><label for="">Mark</label> 
 <input type="text" id="mark4" name="mark4" autocomplete="off" class="form-control"></td>
 </tr>


 <tr> 
 <td><label for="">Subject 5</label>
  
 </td>

 <td><label for="">Mark</label> 
 <input type="text" id="mark5" name="mark5" autocomplete="off" class="form-control"></td>
 </tr>


 <tr> 
 <td><label for="">Subject 6</label>
  
 </td>

 <td><label for="">Mark</label> 
 <input type="text" id="mark6" name="mark6" autocomplete="off" class="form-control"></td>
 </tr>


 <tr>
 <td></td>
 <td>
 <div class="form-group">
 <button type="button" class="btn btn-primary form-control" id="update">Submit</button>
 </div></td>
  </tr>
 </table>
 </form>
 </div>
</div>
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

$("#update").click(function(){
   let per1=confirm("Confirm");
   if(per1){
    $.ajax({
url:"update_mark.php",
type:"POST",
data:$("#mark").serialize(),
success:function(d){
    alert(d);
    location.reload();
}
});

   }//if
})//btn

 $(document).on('click','.view',function(){
   $(".editform").css("visibility","visible")
    var view=$(this);
    var vid=view.attr('sid');
    $("#view").val(vid);
    $("#idNo").val(vid);
    var m1=view.closest("tr").find("td:eq(4)").text();
    var m2=view.closest("tr").find("td:eq(5)").text();
    var m3=view.closest("tr").find("td:eq(6)").text();
    var m4=view.closest("tr").find("td:eq(7)").text();
    var m5=view.closest("tr").find("td:eq(8)").text();
    var m6=view.closest("tr").find("td:eq(9)").text();

$("#mark1").val(m1);
$("#mark2").val(m2);
$("#mark3").val(m3);
$("#mark4").val(m4);
$("#mark5").val(m5);
$("#mark6").val(m6);
 }) 
   
 


  $(document).on('click','.del',function(){
    var permission=confirm("Are you sure want to delete the Student Mark");
    if(permission){
     var del=$(this);
     var id=del.attr('sid');
     $("#id").val(id);
     $.ajax({
url:"delete_mark.php",
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
  $(".editform").css("visibility","hidden")

  var txt=$("#search").val();
   if(txt!=""){
    $.ajax({
url:"searchMark.php",
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