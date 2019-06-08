<?php

require_once('build.php');

if (isset($_POST['userEmail']) && isset(($_POST['userPassword'])))
{
	$userName = $_POST['userEmail'];
	$password = $_POST['userPassword'];
	$sql = "select * from user where userName = '$userName' and password = '$password'";
	$customer = $db->query($sql);
	$row = $customer->fetch();
	$result = $row['userID'];
	
	if (!$result)
	{
        $_SESSION['login'] = false;
		header('Location: BaghChal_Login.php');

	}
	else
	{
		session_save_path('./');
		session_start();
		$_SESSION['userName'] = $userName;
		$_SESSION['password'] = $password;
		header('Location: BaghChal_feature.php');
	}
	
	
	
        // code for question 3 (a) goes here
        // $sql = "select * from customer where Surname = '$theSurname' and Password = '$thePassword'";
		// $customer = $db->query($sql);
		// $row = $customer->fetch();
		// $result = $row['custID'];
		// var_dump($result);
		// echo "<br><br>";
        // return $result;
}


?>