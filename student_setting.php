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
    .error{
        color:red;
    }
    .success{
        color:green;
    }
    label{
        
        font-family:Times New Roman;
    }
    h3{
      font-family:Times New Roman;
    }
    </style>
 </head>
 <body>
 <div class="topnav" id="myTopnav">
  <a class="active" href="student_home.php">SSB</a>
     
  <a href="student_home.php" >Home</a>
  <a  href="student_news.php">News</a>
  <a class="active"  href="student_setting.php">More</a>
   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>  
 <br>
  
<br><br><br><br><br>
 <div class="col-md-12">

 <div class="col-md-12">
<div class="col-md-2"></div>
<div class="col-md-8">
<br>
<h3>Set New password</h3>
<br>
<form action=""method="post">
<div class="form-group">
    <label for="">Old Password</label>
    <input type="password" class="form-control" name="oldpass">
</div>
<div class="form-group">
    <label for="">New Password</label>
    <input type="password" class="form-control" name="newpass">
</div>
<div class="form-group">
    <label for="">Confirm Password</label>
    <input type="password" class="form-control" name="confirmpass">
</div>
<div class="form-group">
     <input type="submit" value="set" class="form-control btn btn-success" name="submit">
</div>

</form>
<?php
if(isset($_POST["submit"])){
 $sname= $_SESSION["name"];
 $spass= $_SESSION["pass"];
 $oldpass= $_POST["oldpass"];

    
   $newpass=$_POST["newpass"];
   $confirmpass=$_POST["confirmpass"];

 

   if($newpass!=""&&$confirmpass!=""){
      if($newpass==$confirmpass){
          
          $sql="update user students pass='$newpass' where pass='$oldpass' ";      
      if($con->query($sql)){
        echo"<div class='success'><p align='center'>Password Changed <br>Please Once Logout and Login</P></div>";
 
      }
      else{
      echo"<div class='error'><p align='center'>Unable To Reach Database</P></div>";
      }}
      else{
       echo"<div class='error'><p align='center'>New password and Confirm password must be same</P></div>";
    }
 }
   else
   echo"<div class='error'><p align='center'>All The Feilds Required</P></div>";
}
?>
</div>
<div class="col-md-2"></div>

</div>



< 


<center><div style="margin-top:155px;"><p>&copy;SSB 2020</p></div></center>
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
<script>
            $(document).ready(function(){
              $(".success").delay("slow").fadeOut("slow");
              $(".error").delay("slow").fadeOut("slow");
 
            })
            </script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
           
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>     
</html>