<?php
if(isset($_POST['create'])){
	$username = $_POST['name'];
	$password = $_POST['password'];

	$connection = mysqli_connect('localhost','root','','firstdb');
	if(!$connection)
		die('Not Connected');

	$query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
	$result = mysqli_query($connection,$query);
	if(!$result){
		die('query failed').mysqli_error();
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
</head>
<body>
	<center>
		<h1>Create</h1>
		<form action="index.php" method="post">
		<table border="1" >
			<tr>
				<td>Name: </td>
				<td><input type="text" name="name"></td>
			</tr>

			<tr>
				<td>password: </td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="create" value="Submit"></td>
			</tr>
		</table>
	</form>
	</center>

</body>
</html>