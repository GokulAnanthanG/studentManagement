<?php

$conn=new mysqli('localhost','root','','login');
session_start();
unset($_SESSION["name"]);
session_destroy();
echo"<script>window.open('login.php','_self')</script>";
?>