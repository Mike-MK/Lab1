<?php
	include_once 'DBConnector.php';
	include_once 'user.php';
	$con = new DBConnector;



	if(isset($_POST['btn-save'])){
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$city_name = $_POST['city_name'];


		$user = new User($first_name,$last_name, $city_name,$con->conn);
		$res = $user->save();

		if($res){
			echo "Save operation was successful";

		}else{
			echo "An error occurred";
		}
	}
?>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="post">
			<table align="centre">
				<tr>
					<td><input type="text" name="first_name" required placeholder="firstname" /></td>
				</tr>
				<tr>
					<td><input type="text" name="last_name" required placeholder="lastname" /></td>
				</tr>
				<tr>
					<td><input type="text" name="city_name" required placeholder="cityname" /></td>
				</tr>
				<tr>
					<td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
				</tr>
			</table>
		</form>
	</body>
</html>
