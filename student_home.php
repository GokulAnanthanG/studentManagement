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
  color:groove
}
.t2{
  color:#F08080;
  font-size:20px;
  font-family: Monaco;
  }
image{
    height:400px;
   
  }
  .head1{
    font-family:Times New Roman;
    color:#F08080;
    width:130px;
    background: rgba(255,255,255,1);
background: -moz-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(0%, rgba(232,161,169,1)), color-stop(55%, rgba(237,237,237,1)), color-stop(65%, rgba(255,255,255,1)), color-stop(100%, rgba(255,255,255,1)));
background: -webkit-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
background: -o-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
background: -ms-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=1 );
   }
  .head1{
    border-bottom-style:groove;
     border-bottom-width:20px;
     border-right-style:groove;
     border-right-width:9px;
  }
.head1 h2{
  margin-left:20px;  
}
  .head2{
    font-family:Times New Roman;
    color:#F08080;
    border-bottom-style:groove;
     border-bottom-width:20px;
     width:130px;
     border-right-style:groove;
      border-right-width:9px;
     background: rgba(255,255,255,1);
background: -moz-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
background: -webkit-gradient(left top, right bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(0%, rgba(232,161,169,1)), color-stop(55%, rgba(237,237,237,1)), color-stop(65%, rgba(255,255,255,1)), color-stop(100%, rgba(255,255,255,1)));
background: -webkit-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
background: -o-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
background: -ms-linear-gradient(-45deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
background: linear-gradient(135deg, rgba(255,255,255,1) 0%, rgba(232,161,169,1) 0%, rgba(237,237,237,1) 55%, rgba(255,255,255,1) 65%, rgba(255,255,255,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ffffff', GradientType=1 );
   }
    </style>
 </head>
 <body>
 <div class="topnav" id="myTopnav">
 <a class="active" href="student_home.php">SSB</a>
  <a href="student_home.php" class="active">Home</a>
  <a href="student_news.php">News</a>
  <a    href="student_setting.php">More</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>  
 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img style="height:400px;width:100%" class="img-responsive"    src="book.jpg" height="200px" alt="ssb">
    </div>

    <div class="item">
      <img style="height:400px;width:100%" class="img-responsive" src="bench.jpg" width="100%"  height="200px" alt="ssb">
    </div>

    <div class="item">
      <img style="height:400px;width:100%" class="img-responsive" src="books.jpg" alt="   ssb">
    </div>
 

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>

 <div class="col-md-12">
 <div class="col-md-4"></div>
 <div class="col-md-4 text-center">
 
 <span class="t1"> 
 Welcome</span> <span class="t2"> <?php
echo $_SESSION["name"];
 ?>
 </span>
 </div>
 <div class="col-md-4"></div>
<br><br>
<div class="col-md-12"><br><br>
<div class="col-md-6">
<div class="head1"><h2 style="margin-left:20px;">SSB</h2></div><br>
<div id="para1">
<img class="img-fluid" width="600px"height="450px" src="college.png" alt="">
</div>
</div>
<div class="col-md-6">
<div class="head2"><h2  style="margin-left:20px;">Vision</h2></div><br>
<div id="para3">
 <p align="justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea animi vitae doloremque iure quas, maxime ipsa itaque minus. Quibusdam laudantium veritatis, tenetur assumenda ipsam tempora voluptatum animi libero illum quas sapiente sed ab! Cumque error esse id ullam inventore amet fugit vitae officia adipisci, explicabo optio laborum, tempore dolore nobis at consequatur voluptate! Pariatur maxime omnis commodi facilis tenetur, vero unde mollitia recusandae suscipit expedita animi exercitationem placeat. Expedita modi dolorum odit at possimus quos vel quisquam, dolor eius recusandae hic? Vel amet, incidunt unde porro natus similique optio modi itaque ipsam neque maiores ducimus omnis consequuntur voluptates repellat iste aperiam, reiciendis nam eos, consequatur sint tempora beatae quam! Praesentium blanditiis fuga aut possimus tenetur repellat saepe, doloribus, voluptatibus obcaecati laudantium itaque quisquam modi exercitationem distinctio minus maxime odio deleniti mollitia! Similique nihil dolores ducimus quasi architecto totam, animi sunt, necessitatibus exercitationem repellat perferendis iusto soluta repellendus. Repellat, officiis! Dolore reiciendis porro ex animi earum? Doloribus quis, numquam adipisci ea quas accusamus est amet quibusdam sed placeat! Nobis, reiciendis nisi! Sunt rerum earum sed consequuntur esse aspernatur exercitationem consectetur aut labore rem ab eius ratione culpa ullam nostrum, deleniti laboriosam unde commodi quis fugiat facere quos iusto doloremque eligendi. Eum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea deserunt ipsa veniam quisquam reiciendis optio odit consequatur quasi sed dolore! Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo dolore quo dolorem, esse iste quae sed alias fugiat in quasi? </p>
 </div>
 </div>
</div>

<center><div><p>&copy;SSB 2020</p></div></center>

 </div>

<script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                
</html>