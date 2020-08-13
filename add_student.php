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

    <title>Add Student</title>
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
    
    <br> <br><br>  <br> &nbsp;
<!-- The sidebar -->
<div class="sidebar">
<p title="Admin" id="icon"><i class="fa fa-user-secret" aria-hidden="true"></i></p>
  <a  href="home.php">Home   <i id="men1" class="fa fa-home"></i> </a>
  <a  href="news.php">News   <i id="men2" class="fa fa-newspaper-o"></i></a>
  <a  class="active" href="add_student.php">Add Students <i id="men3" class="fa fa-user-plus"></i></a>
  <a  href="view_student.php">view Student <i id="men4"  class="fa fa-eye"></i></a>
  <a  href="add_staff.php">Add Staff <i id="men5" class="fa fa-plus"></i></a>
   <a href="view_staff.php">view Staff <i id="men6" class="fa fa-eye"></i></a>
   <a href="add_mark.php">Add Mark <i id="men7" class="fa fa-plus"></i></a>
   <a href="view_mark.php">View Mark <i id="men8" class="fa fa-eye"></i></a>
  <a  href="add_news.php">Add News <i id="men9" class="fa fa-newspaper-o"></i></a>
 <a   href="setting.php"> Setting     <i id="men11" class="fa  fa-gear"></i></a>
  <a  href="more.php">More <i id="men10">...</i> </a>
  <a  href="logout.php">Logout  <i id="men12" class="fa fa-sign-out"></i></a>
</div>

<!-- Page content -->
<div class="content">
   
<div class="container">
<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"><h1 style="font-family: Monaco;color:#0269A4">  <i class="fa fa-user-plus"></i>
 Add Student

 </h1></div>
</div>

</div>

 
<br>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"> 
<p style="font-size:17px;">In here Admin can add the students detailes.</p>

</div>
</div>
<div class="col-md-12">
<div class="col-md-2"></div>
<div class="col-md-8">
 <form action="" id="studentForm" method="post" enctype="multipart/form-data">
 <table>
 
 <tr>
 <td><label for="">Name</label> 
 <input type="text" name="name" autocomplete="off" class="form-control"></td>
  <td><label for="">Father Name</label>
   <input type="text" name="fatherName" autocomplete="off" class="form-control"></td>
  
 </tr>
 <tr>
 
 <td> <label for="">Add student Image</label> </td> <td> <input class="form-control" type="file" name="image" >
 <?php
if(isset($_POST["submit"])){
   
  if(getimagesize($_FILES["image"]["tmp_name"])==false){
      echo"This image is not Acceptable";
  }
  else{
  $img=$_FILES["image"]["tmp_name"];
  $name=$_FILES["image"]["name"];
  $img=file_get_contents($img);
  $img=base64_encode($img);
  $sql="INSERT INTO students (imgName,img) VALUES('$name','$img')";
  if($conn->query($sql)){
      echo"Image Stored";
  }
  else{
      echo"Somthing Went Wrong";
  }
}
}

?>
 
   </td>
 </tr>
 <tr><td> <label for="">Date OF Birth</label></td></tr>
 <tr>
 <td>

 <label for="">Day</label>
 <select class="form-control" name="day" id="">
 <option value=""></option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 <option value="6">6</option>
 <option value="7">7</option>
 <option value="8">8</option>
 <option value="9">9</option>
 <option value="10">10</option>
 <option value="11">11</option>
 <option value="12">12</option>
 <option value="13">13</option>
 <option value="14">14</option>
 <option value="15">15</option>
 <option value="16">16</option>
 <option value="17">17</option>
 <option value="18">18</option>
 <option value="19">19</option>
 <option value="20">20</option>
 <option value="21">21</option>
 <option value="22">22</option>
 <option value="23">23</option>
 <option value="24">24</option>
 <option value="25">25</option>
 <option value="26">26</option>
 <option value="27">27</option>
 <option value="28">28</option>
 <option value="29">29</option>
 <option value="30">30</option>
 <option value="31">31</option>
 

 </select></td>
 <td><label for="">Month</label>
 <select class="form-control" name="month" id="">
 <option value=""></option>
 <option value="1">1</option>
 <option value="2">2</option>
 <option value="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 <option value="6">6</option>
 <option value="7">7</option>
 <option value="8">8</option>
 <option value="9">9</option>
 <option value="10">10</option>
 <option value="11">11</option>
 <option value="12">12</option>
  
 </select></td>
 </tr>
 <tr><td><label for="">Year</label>
 <input type="text" value="20"  name="year" class="form-control" id=""></td><td><label for="">Email</label><input autocomplete="off" name="email" placeholder="sam@Gmail.com" class="form-control" type="email"></td></tr>
 
 <tr><td><label for="">Phone No</label><input placeholder="+91 975********" name="pno" class="form-control" autocomplete="off" type="text"></td><td><label for="">Father Phone No</label><input  autocomplete="off" placeholder="+91 975********" class="form-control" name="fpno" type="text"></td></tr>
 
 <tr><td><label for="">Blood Group</label>
 
 <select name="bloodGroup" class="form-control" id="">
 <option value=""></option>
 <option value="A+">A+</option>
 <option value="A-">A-</option>
 <option value="B+">B+</option>
 <option value="B-">B-</option>
 <option value="AB+">AB+</option>
 <option value="AB-">AB-</option>
 <option value="O+">O+</option>
 <option value="O-">O-</option>
 


 </select>
 </td><td><label for="">Address</label>,<textarea name="address" id="" autocomplete="off" cols="30" rows="3"></textarea></td></tr>
 <tr><td><label for="">Gender</label>
 <select name="gender" class="form-control" id="">
 <option value=""></option>
 <option value="Male">Male</option>
 <option value="Female">Female</option>
 </select>
 </td><td><label for="">Pin Code</label>
 <input type="text" autocomplete="off" class="form-control" name="pincode" id="">
 </td></tr>
 <tr>
 <td><label for="">Department</label>
 <select class="form-control" name="department" id="">
<option value=""></option>
 <option value="BCA">BCA</option>
 <option value="B.sc(IT)">B.sc(IT)</option>
 <option value="B.com">B.com</option>
 <option value="BBA">BBA</option>
 <option value="BA(English)">BA(English)</option>
 <option value="BA(Tamil)">BA(Tamil)</option>
 <option  value="M.com">M.com</option>

 </select>
 </td>
 <td><label for="">City</label><input type="text" class="form-control" autocomplete="off" placeholder="Tirunelveli" name="city" id=""></td>
 </tr>

 <tr> <td><label for="">Roll No</label><input class="form-control" type="text"   name="rollNo" id=""></td>
 <td><label for="">Joining Year</label><input class="form-control" type="text" value="20" name="joinedYear" id=""></td>
</tr>
 <tr>
 <td><a href="edit_student.php"><button title="Edit Added Student Details" type="button" class="btn btn-primary"><i class="fa fa-edit"></i></button></a></td> 
 <td><input class="form-control btn btn-primary" type="submit" value="Add Student" name="submit" id="submit"></td>
 </tr>
 </table>
 </form>

</div>
</div>
<br>
<center><br><div><p>&copy;SSB 2020</p></div></center>

 </div>   
</body>
<script>
$(document).ready(function(){
  
  
  $("#submit").click(function(){
    var permission=confirm("Confirm");
    if(permission){
    $.ajax({
url:"addStudent.php",
type:"post",
data:$("#studentForm").serialize(),
success:function(d){
    alert(d);
     location.reload();
}
});
    }
  }) 
  
})
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="navbar-script.js"></script>
</html>