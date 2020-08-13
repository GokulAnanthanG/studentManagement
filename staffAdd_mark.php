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

    <title>Add Mark</title>
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
    table ,tr,td{
      padding:15px
    }
    label{
      color:#0269A4;
    }
    table td{
padding:30px;

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
 &nbsp; <span class="t1">SSB</span> <span class="t2">College Management System</span> &nbsp;
</nav>
    
    <br> <br><br><br><br>    &nbsp;
<!-- The sidebar -->
<div class="sidebar">
<p id="icon"><i title="staff" class="fa fa-user" aria-hidden="true"></i></p>
  <a  href="staff_home.php">Home   <i id="men1" class="fa fa-home"></i> </a>
  <a  href="profile.php">Profile&nbsp;<i id="pro" class="fa fa-user-circle-o"></i></a>
  <a href="staff_news.php">News   <i id="men2" class="fa fa-newspaper-o"></i></a>
   <a  class="active"  href="staffAdd_mark.php">Add Mark <i id="men7" class="fa fa-plus"></i></a>
   <a   href="staffView_mark.php">View Mark <i id="men8" class="fa fa-eye"></i></a>
 <a href="staff_setting.php"> Setting     <i id="men11" class="fa  fa-gear"></i></a>  
  <a href="logout.php">Logout  <i id="men12" class="fa fa-sign-out"></i></a>
</div>

<!-- Page content -->
<div class="content">
   
<div class="container">
<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"><h1 style="font-family: Monaco;color:#0269A4">  <i class="fa fa-user-plus"></i>
 Add Mark

 </h1></div>
</div>

</div>

 
<br>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"> 
<p style="font-size:17px;">In here Admin can add the student markk.</p>

</div>
</div>
<div class="col-md-12">
<div class="col-md-2"></div>
<div class="col-md-8">
 <form action="" id="mark" method="post">
 <table>
 
 <tr>
 <td><label for="">Roll No</label> 
 <input type="text" id="rollNo" name="rollNo" autocomplete="off" class="form-control"></td>
  <td><label for="">  Name</label>
   <input type="text" id="name" name="name" autocomplete="off" class="form-control"></td>
  
 </tr>
  <tr>
  <td><label for="">Department</label>
 <select class="form-control" name="department" id="department">
<option value=""></option>
 <option class="bca" value="BCA">BCA</option>
 <option value="B.sc(IT)">B.sc(IT)</option>
 <option value="B.com">B.com</option>
 <option value="BBA">BBA</option>
 <option value="BA(English)">BA(English)</option>
 <option value="BA(Tamil)">BA(Tamil)</option>
 <option  value="M.com">M.com</option>

 </select>
 </td>

 <td>

 <label for="">Section</label>
 <select class="form-control" name="section" id="">
 <option value=""></option>
 <option value="1">I</option>
 <option value="2">II</option>
 <option value="3">III</option>
 <option value="4">IV</option>
  
 

 </select></td>

 
 
 </tr>
 <tr> 
 <td><label for="">Subject</label>
 <select class="form-control" name="subject1" id="subject">
<option  id="s1" value=""></option>
 

 </select>
 </td>

 <td><label for="">Mark</label> 
 <input type="text" name="mark1" autocomplete="off" class="form-control"></td>
 </tr>
 
  
 <tr> 
 <td><label for="">Subject 2</label>
 <select class="form-control" name="subject2" id="subject2">
<option  id="s1" value=""></option>
 

 </select>
 </td>

 <td><label for="">Mark</label> 
 <input type="text" name="mark2" autocomplete="off" class="form-control"></td>
 </tr>


 <tr> 
 <td><label for="">Subject 3</label>
 <select class="form-control" name="subject3" id="subject3">
<option  id="s1" value=""></option>
 

 </select>
 </td>

 <td><label for="">Mark</label> 
 <input type="text" name="mark3" autocomplete="off" class="form-control"></td>
 </tr>


 <tr> 
 <td><label for="">Subject 4</label>
 <select class="form-control" name="subject4" id="subject4">
<option  id="s1" value=""></option>
 

 </select>
 </td>

 <td><label for="">Mark</label> 
 <input type="text" name="mark4" autocomplete="off" class="form-control"></td>
 </tr>


 <tr> 
 <td><label for="">Subject 5</label>
 <select class="form-control" name="subject5" id="subject5">
<option  id="s1" value=""></option>
 

 </select>
 </td>

 <td><label for="">Mark</label> 
 <input type="text" name="mark5" autocomplete="off" class="form-control"></td>
 </tr>


 <tr> 
 <td><label for="">Subject 6</label>
 <select class="form-control" name="subject6" id="subject6">
<option  id="s1" value=""></option>
 

 </select>
 </td>

 <td><label for="">Mark</label> 
 <input type="text" name="mark6" autocomplete="off" class="form-control"></td>
 </tr>


 <tr>
 <td></td>
 <td>
 <div class="form-group">
 <button type="button" class="btn btn-primary form-control" id="btn">Submit</button>
 </div></td>
  </tr>
 </table>
 </form>
 <p></p>
</div>
</div>
<center><div><p>&copy;SSB 2020</p></div></center>

 </div>   
</body>
<script>
$(document).ready(function(){
   
   $("#btn").click(function(){
 var per=confirm("Confirm");
 if(per){
 $.ajax({
  url:"mark.php",
type:"post",
data:$("#mark").serialize(),
success:function(d){
    alert(d);
     location.reload();
}
 })
  }//per
    });//btn


  $("#department").change(function(){
   var val= $(this).val();
   $.post("subject.php",{val:val},function(data){
 $("#subject").html(data);
 $("#subject2").html(data);
 $("#subject3").html(data);
 $("#subject4").html(data);
 $("#subject5").html(data);
 $("#subject6").html(data);

    });
   });
  
$("#rollNo").keyup(function(){
   var roll=$(this).val();
  $.post("addMark_studentDetail.php",{roll:roll},function(d){
    var res=JSON.parse(d);
  if(res.ERROR==0){
    alert("record found");
    $("#name").val(res.name);
    $("#department").val(res.department);

//

var val= $(department).val();
   $.post("subject.php",{val:val},function(data){
 $("#subject").html(data);
 $("#subject2").html(data);
 $("#subject3").html(data);
 $("#subject4").html(data);
 $("#subject5").html(data);
 $("#subject6").html(data);
    });
//


  }

  });
})




})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="navbar-script.js"></script>
</html>