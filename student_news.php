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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Home</title>
    <style>
    .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  
   

}
.t1{
  font-size:20px;
  font-family: Monaco;
}
.t2{
  color:#F08080;
  font-size:20px;
  font-family: Monaco;
  }
image{
    height:400px;
   
  }
  .mes{
    font-size:30px;
 text-align:justify;
      font-family:cursive;
  }
  #comments{
    background-color: rgba(162, 238, 162, 0.500);
   width: 100%;
  height: 300px;
  overflow: scroll;
    }
    </style>
 </head>
 <body>
 <div class="topnav" id="myTopnav">
  <a class="active" href="student_home.php">SSB</a>
     
  <a href="student_home.php" >Home</a>
  <a class="active" href="#news">News</a>
  <a    href="student_setting.php">More</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>  
 <br>
 <div class="col-md-12">
 <div class="col-md-4"></div>
 <div class="col-md-4 text-center">
 
 <span class="t1"> 
 SSB</span> <span class="t2">  NEWS
  
 </span>
 </div><br>
 <div class="col-md-4"></div>
 </div>
 <div class="container">
     <div class="row well">
<div class="col-md-12">
<?php
$sql=("SELECT * FROM message");
$res=$con->query($sql);
if($res->num_rows>0){
 
  
  
  

while($row=$res->fetch_object()){
   
   echo"<center><div style='font-family:cursive;'   class='text-justify well mess'>$row->message</div></center>";
   
   
}
 
}
else{
  echo"No News";
}
?>
</div></div>

<br>
<div class="col-md-12">
 <div class="col-md-4"></div>
 <div class="col-md-4 text-center">
 
 <span class="t1"> 
 SSB</span> <span class="t2">  EXAM
  
 </span>
 </div> 
 <div class="col-md-4"></div>
 </div></div>

<div class="container">
<div class="row">
<div class="col-md-12">

<?php
$sql=("SELECT * FROM exam");
$res=$con->query($sql);
if($res->num_rows>0){
    echo"<center><div class='well'>";
  echo"<table id='exam' class='table'>";
 echo"<tr>";
 echo"<th>Exam Type</th>";
 echo"<th>Date</th>";
 echo"<th>Class</th>";
 echo"<th>Section</th>";
 echo"<th>Session</th>";
  
  
 echo"</tr>";

while($row=$res->fetch_object()){
  echo"<tr>";
  echo"<td>$row->ename</td>";
  echo"<td>$row->day/$row->month/$row->year</td>";
  echo"<td>$row->class</td>";
  echo"<td>$row->section</td>";
  echo"<td>$row->session</td>";
    
  echo"</tr>";
}
echo"</table>";
echo"</div></center>";
}
else{
  echo"No Exams found";
}
?>


</div>

</div>

<div class="container well">
<div class="row">
<h2 style="font-family:Times New Roman">Comments</h2><i style="opacity:0.5" id="info" class="fa fa-info-circle">&nbsp;Make sure before entering your comment because the enterd comments are non-deletable</i>

<form id="comment" method="post" action="">
 <textarea class="form-control-responsive" placeholder="Add your comment" name="comment" id="" cols="50" rows="5"></textarea>
<br><button type="button" id="c_btn" class="btn btn-success"> <i class="fa fa-commenting"></i> </button> <h6 style="font-family:Times New Roman" id="status"></h6>
 </form>&nbsp;
 <div id="comments"> 


 </div>
</div>
</div>


<center><div><p>&copy;SSB 2020</p></div></center>
</div>


<script>

setInterval(() => {
  $("#comments").load("news_comment.php").fadeIn(slow);
}, 1000);

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
</body>
<script>
$("#c_btn").click(function(){
  $.ajax({
url:"comment.php",
type:"post",
data:$("#comment").serialize(),
success:function(d){
    $("#status").html(d);
     $("#comment")[0].reset();
}
});
});//buttons

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
</html>