<?php 
session_start(); 
if(!$_SESSIONlogged){ 
    header("Location:wecome.php"); 
    exit; 
} else{
 header('Location:index.php');}
 
?> 