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


    <title>Add News</title>
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
    #comments{
      background-color: lightblue;
  width: 100%;
  height: 300px;
  overflow: scroll;
    }
    .b{
      font-family:cursive;
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
    
    <br> <br><br><br>  &nbsp;
<!-- The sidebar -->
<div class="sidebar">
<p title="Admin" id="icon"><i class="fa fa-user-secret" aria-hidden="true"></i></p>
  <a  href="home.php">Home   <i id="men1" class="fa fa-home"></i> </a>
  <a href="news.php">News   <i id="men2" class="fa fa-newspaper-o"></i></a>
  <a href="add_student.php">Add Students <i id="men3" class="fa fa-user-plus"></i></a>
  <a href="view_student.php">view Student <i id="men4"  class="fa fa-eye"></i></a>
  <a href="add_staff.php">Add Staff <i id="men5" class="fa fa-plus"></i></a>
   <a href="view_staff.php">view Staff <i id="men6" class="fa fa-eye"></i></a>
   <a   href="add_mark.php">Add Mark <i id="men7" class="fa fa-plus"></i></a>
   <a   href="view_mark.php">View Mark <i id="men8" class="fa fa-eye"></i></a>
  <a class="active" href="add_news.php">Add News <i id="men9" class="fa fa-newspaper-o"></i></a>
 <a href="setting.php"> Setting     <i id="men11" class="fa  fa-gear"></i></a>
  <a href="more.php">More <i id="men10">...</i> </a>
  <a href="logout.php">Logout  <i id="men12" class="fa fa-sign-out"></i></a>
</div>

<!-- Page content -->
<div class="content">
   
<div class="container">
<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-9"><h1 style="font-family: Monaco;color:#0269A4">   
 <i class="fa fa-newspaper-o"></i>SSB News
 </h1></div>
</div>

</div>

 
<br>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-5"> 
<p style="font-size:17px;">In here you Admin  can add the ssb exams and news</p>
<br><br>
<h2 style="font-family:Times New Roman">Add message</h2>
<form action="" id="mes" method="post">
<div class="form-group">
<textarea name="mes" id="message" rows="5" cols="50"></textarea>
 </div>
 <div class="form-group">
 <input type="button" id="btn1"   class="btn btn-primary" value="Add Message">
 <input id="did" value="0" name="id" type="hidden">
  </div>
 </form>
 <br>
</div><br><br><br><br><br>
<div class="col-md-5"><?php
$sql=("SELECT * FROM message");
$res=$con->query($sql);
if($res->num_rows>0){
  echo"<table class='table'>";
 echo"<tr>";
 echo"<th>Message</th>";
  
  
 echo"</tr>";

while($row=$res->fetch_object()){
  echo"<tr>";
  echo"<td>$row->message</td>";
  echo"<td><button class='btn btn-sm btn-primary edit1' nid='$row->id'><i title='view' class='fa fa-edit'></i></button></td>";
  echo"<td><button class='btn btn-sm btn-danger del1' nid='$row->id'><i title='Delete' class='fa fa-trash'></i></button></td>";
   
  echo"</tr>";
}
echo"</table>";
}
else{
  echo"No record found";
}
?></div>
<div class="col-md-1"></div>
</div>

<div class="col-md-12"><br><br><form class="form" action="" id="exam">

<div class="col-md-12"><br><br>
<div class="col-md-1"></div>
<div class="col-md-5">
<h2 style="font-family:Times New Roman">Add Exam</h2>
<br>
<div class="form-group">
<label for="">Exam Name</label>
<input type="text" name="ename" class="form-control">
</div>
<div class="form-group">
<label for="">Exam Date</label><br><br>
<label for=""> Day  </label>
<select name="day" id="">
<option value="0">0</option>
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
 

</select>
&nbsp;&nbsp;
<!-month->
<label for=""> Month  </label>
<select name="month" id="">
<option value="0">0</option>
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
 

</select>

<!-year->
&nbsp;&nbsp;
<!-month->
<label for=""> Year  </label>
<input value="20" name="year" autocompelete="off" type="text"><br><br>
<!-class->
<label for=""> class  </label>
<select name="class" id="">
<option value=" ">--</option>
<option value="BCA">BCA</option>
<option value="B.sc(IT)">B.sc(IT)</option>
<option value="B.sc(Maths)">B.sc(Maths)</option>
<option value="B.com">B.com</option>
<option value="BBA">BBA</option>
<option value="BA(Tamil)">BA(Tamil)</option>
<option value="BA(English)">BA(English)</option>
 
 

</select>
<!-section->&nbsp;&nbsp;
<label for=""> Section  </label>
<select name="section" id="">
<option value=" ">--</option>
<option value="I">I</option>
<option value="II">II</option>
<option value="III">III</option>
<option value="IV">IV</option>
</select>
<!-$_SESSION->&nbsp;&nbsp;
<label for="">  Session  </label>
<select name="session" id="">
<option value="">--</option>
<option value="F.N">F.N</option>
<option value="A.N">A.N</option>
 
</select>
<br><br>
<input id="btn2" type="button" class="btn btn-primary" value="Set Exam" type="button">
<input type="hidden" id="eid" name="eid">
</div>
</div><br><br>
<div class="col-md-5"><br><br><br>
<?php
$sql=("SELECT * FROM exam");
$res=$con->query($sql);
if($res->num_rows>0){
  echo"<table class='table'>";
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
   echo"<td><button type='button'  class='btn btn-sm btn-danger del2' nid='$row->id'><i title='Delete' class='fa fa-trash'></i></button></td>";
   
  echo"</tr>";
}
echo"</table>";
}
else{
  echo"No record found";
}
?>


</div>
<div class="col-md-1"></div>
</form>
</div>

<div class="col-md-12">
<div class="col-md-1"></div>
<div class="col-md-10">
<h2 style="font-family:Times New Roman">Comments</h2>
<form id="comment" method="post" action="">
<textarea class="form-control-responsive" placeholder="Add your comment" name="comment" id="" cols="50" rows="5"></textarea>
<br><button type="button" id="c_btn" class="btn btn-primary"> <i class="fa fa-commenting"></i> </button> <h6 style="font-family:Times New Roman" id="status"></h6>
<input type="hidden" id="cid" name="id">
</form>&nbsp;
<div id="comments"> 








</div>
</div>
<div class="col-md-1"></div>

</div>

<!-container-->
</div>



<center><div><p>&copy;SSB 2020</p></div></center>


 </div>   
</body>

<script>
$(document).ready(function(){
   
  $(document).on('click','.edit1',function(){
    var edit=$(this);
    var id=edit.attr('nid');
  //  alert(id)
  $("#did").val(id);
  var mess=edit.closest("tr").find("td:eq(0)").text();
  $("#message").html(mess);
   
});
$(document).on('click','.del1',function(){
  var permission=confirm("Are you sure you want to delete the data");   
  if(permission){
    var del=$(this);
    var id=del.attr('nid');
  //  alert(id)
  $("#did").val(id);
  $.ajax({
url:"delete_news.php",
type:"post",
data:$("#mes").serialize(),
success:function(d){
    alert(d);
    location.reload();
    $("#frm")[0].reset();
}
});
  }
});

$(document).on('click','.del2',function(){
  var permission1=confirm("Are you sure you want to delete the data");
if(permission1){
 // alert("hi")
 var del1=$(this);
    var id=del1.attr('nid');
  //  alert(id)
  $("#eid").val(id);
  $.ajax({
url:"delete_exam.php",
type:"post",
data:$("#exam").serialize(),
success:function(d){
    alert(d);
    location.reload();
    $("#frm")[0].reset();
}
});
}
});


$("#btn1").click(function(){
  if($("#did").val()==0){
    
  $.ajax({
url:"send_news.php",
type:"post",
data:$("#mes").serialize(),
success:function(d){
    alert(d);
    location.reload();
    $("#frm")[0].reset();
}
});
}//if
else{
  $.ajax({
url:"update_news.php",
type:"post",
data:$("#mes").serialize(),
success:function(d){
    alert(d);
    location.reload();
    $("#frm")[0].reset();
}
});
}
})//button


$("#btn2").click(function(){
  $.ajax({
url:"set_exam.php",
type:"post",
data:$("#exam").serialize(),
success:function(d){
    alert(d);
    location.reload();
    $("#exam")[0].reset();
}
});
})//button
//comment
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
})//buttons

$(document).on('click','.cdel',function(){
  var permission=confirm("Are you sure you want to delete the data");   
  if(permission){
    var commentdel=$(this);
    var cid=commentdel.attr('cid');
  //  alert(id)
  $("#cid").val(cid);
  $.ajax({
url:"delete_comment.php",
type:"post",
data:$("#comment").serialize(),
success:function(d){
    alert(d);
     $("#frm")[0].reset();
}
});
  }
});

setInterval(() => {
  $("#comments").load("load_comment.php")
}, 1000);
   
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="navbar-script.js"></script>
</html>