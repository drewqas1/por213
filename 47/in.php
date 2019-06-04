<?php 
  header('Location:http://testgeorge/insta/47/reg.php?id='.$_POST['user_id']);
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'inh');
	$query = mysqli_query($connect, "INSERT INTO post (post_image, post_text, user_id) VALUES ('" . $_FILES['post_image']['name'] . "', '" . $_POST['post_text'] . "', '" . $_POST['user_id'] . "')");
  move_uploaded_file($_FILES['post_image']['tmp_name'],$_FILES['post_image']['name']);
	
?> 
