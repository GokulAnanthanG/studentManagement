<?php
 $conn=new mysqli('localhost','root','','login');
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


    <title>Home</title>
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
    overflow:scroll;
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
    i{
font-size:large;    }
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
 &nbsp; <span class="t1">SSB</span> <span class="t2">Collage Management System</span> &nbsp;
</nav>
    
     <br><br><br> <br> &nbsp;
<!-- The sidebar -->
<div class="sidebar">
<p title="Admin" id="icon"><i class="fa fa-user-secret" aria-hidden="true"></i></p>
  <a class="active" href="home.php">Home   <i id="men1" class="fa fa-home"></i> </a>
  <a href="news.php">News   <i id="men2" class="fa fa-newspaper-o"></i></a>
  <a href="add_student.php">Add Students <i id="men3" class="fa fa-user-plus"></i></a>
  <a href="view_student.php">view Student <i id="men4"  class="fa fa-eye"></i></a>
  <a href="add_staff.php">Add Staff <i id="men5" class="fa fa-plus"></i></a>
   <a href="view_staff.php">view Staff <i id="men6" class="fa fa-eye"></i></a>
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
<div class="col-md-9"><h1 style="font-family: Monaco;color:#0269A4">Hi  
<?php
echo $_SESSION['name'] ;
?>

 </h1></div>
</div>

</div>

 
<br>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10">
<p style="font-size:17px;">This is admin pannnel her Admin can see the <b>Students</b>,<b>staffs</b> complete details and also Admin can edit or add  the students and staffs details.</p>

</div>
<div class="col-md-1"></div>
</div>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">1</span class="head1"> <span>News</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;News module contain <b>News</b>and <b>Exams</b> of SSB </p>

</div>
<div class="col-md-1"></div>
</div>


<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">2</span class="head1"> <span>Add Student</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;In Add Student module  Admin can add the student detail like <b>name</b>and <b>D.O.B</b> <b>Phone No</b> ect </p>

</div>
<div class="col-md-1"></div>
</div>


<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">3</span class="head1"> <span>View Student</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;In View Student module  Admin can  view the student detail </p>

</div>
<div class="col-md-1"></div>
</div>


<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">4</span class="head1"> <span>Add Staff</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;In Add Student module  Admin can  add the staff details</p>

</div>
<div class="col-md-1"></div>
</div>

 
<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">5</span class="head1"> <span>View Staff</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;In View staff module  Admin can  view the staff detail </p>

</div>
<div class="col-md-1"></div>
</div>


<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">6</span class="head1"> <span>Add Mark</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;In Add Mark module  Admin can  add the student mark </p>

</div>
<div class="col-md-1"></div>
</div>


<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">7</span class="head1"> <span>View Mark</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;In View Mark module  Admin can  view the student mark detail </p>

</div>
<div class="col-md-1"></div>
</div>


<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">8</span class="head1"> <span>Add News</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;In Add News module  Admin can add the <b>News</b>and <b>Exams</b> of SSB </p>

</div>
<div class="col-md-1"></div>
</div>


<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">9</span class="head1"> <span>Setting</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;In Setting module  Admin can change the <b>password</b>and <b>name</b> of the admin </p>

</div>
<div class="col-md-1"></div>
</div>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10"><br>
<p style="font-size:17px;"> <span class="badge badge">10</span class="head1"> <span>More</span> </p>
<p style="font-size:17px;">&nbsp;&nbsp;&nbsp;More module contain login details <b>password</b>and <b>name</b> of the admin </p>

</div>
<div class="col-md-1"></div>
</div>

<center><div><p>&copy;SSB 2020</p></div></center>
 </div>   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                
</html>