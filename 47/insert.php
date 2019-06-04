<?php 	header('location:http://testgeorge/insta/47/login.php');
$connect=mysqli_connect('127.0.0.1','root','','inh');
 $insert=mysqli_query($connect,"INSERT INTO inst (email,name,surname,password) VALUES ('".$_POST['email']."','". $_POST['name'] ."','".$_POST['surname']."','".$_POST['password']."')");
 ?>
