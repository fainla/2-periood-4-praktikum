<?php 
		if (isset($_POST["submit"])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$message = "parool on vale";

		echo "<style>.pwclass{border: 1px solid orange;}</style>"; }
		else {
		$message = "Palun logi sisse";}

	 ?>

<!DOCTYPE html>
<html>
<head>
	<title>praktikum 2.4</title>
</head>
<body>

		<h2><?php echo $message;?></h2>
			<form action="index.php" method="post">


				text<input type="text" name="username" value="<?php if (isset($_POST["submit"])) { $username = $_POST['username'];

				 echo $username;}?>"></input>

				password<input type="password" name="password" class="passwordclass" ></input>

				<input type="submit" value="Saada" name="submit"></input>


			</form>
		<pre><?php print_r($_POST);?></pre>

</body>
</html>