<!DOCTYPE HTML>
<html>
   <head>
		<title></title>
		<meta charset="utf-8">
   </head>
   <body>
	<form action="index.php" method="post">
		<span>Kasutajanimi: </span>
		<input type="text" name="username"><br>
		<span>Parool: </span>
		<input type="password" name="password"><br>
		<input type="submit" name="submit"><br>
	</form>
	<?php 
		$username = $_POST["username"];
		$password = $_POST["password"];
	?>

	<pre>
		<?php 
			print_r($_POST);
		?>
	 </pre>		
   </body>
</html>
