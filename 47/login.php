<!DOCTYPE html>

<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

<form method="post" action="avto.php">
<?php echo '<input  name="email">';?>
<?php echo '<input  name="password" >';?>

<button>авторизация</button>
</form>
<?php echo $_GET['error'] ?>
</body>
</html>