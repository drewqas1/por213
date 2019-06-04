<?php 
 
$connect=mysqli_connect('127.0.0.1','root','','inh');
 $result=mysqli_query($connect, "SELECT * FROM inst  WHERE email='".$_POST["email"]."' AND password='".$_POST["password"]."' ");
    $res=$result->fetch_assoc();
    if($result->num_rows==0){
     header('Location:http://testgeorge/insta/47/login.php?error=ошибка');
    }else{
    	 header('Location:http://testgeorge/insta/47/reg.php?id='.$res['id'].'');
    }

 ?>
  