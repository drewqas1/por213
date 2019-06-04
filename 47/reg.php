<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php 
 
$connect=mysqli_connect('127.0.0.1','root','','inh');
 $result=mysqli_query($connect, "SELECT * FROM inst WHERE id='".$_GET['id']."'  ");
    $res=$result->fetch_assoc();
   

 ?>
 <?php echo '<h2>'.$res['name'].'</h2>';?>
 <?php echo '<h2>'.$res['surname'].'</h2>';?>

 <form method="POST" action="in.php" enctype="multipart/form-data">

   <input type="" name="post_text">
   
	<?php echo '<input type="hidden" name="user_id" value="'.$_GET['id'].'">'  ?>
     <input type="file" name="post_image">
     <button>добавить</button>
 </form>
<?php
 $result2=mysqli_query($connect, "SELECT * FROM inst INNER JOIN post ON inst.id = post.user_id");
for ($i=0; $i<$result2->num_rows; $i++) { 
	 $res2=$result2->fetch_assoc();
 ?>
<div class="container">


	<?php  echo '<h6>' .$res2['name'].'</h6>';?>
	<?php  echo '<h6>' .$res2['surname'].'</h6>';?>
	<?php echo '<img src="' . $res2["post_image"] . '"class="w-100">'; ?>
	<?php  echo '<p>'.$res2["post_text"].'</p>';?>
</div>
<?php
}
?>
