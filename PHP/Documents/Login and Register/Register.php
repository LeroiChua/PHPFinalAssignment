<?php
class Register extends AbstractRegister 
{
	//Collect UserName
	function collectUserName() {
		if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
			if ( !is_null($_POST['userName']) ) {
				$userName = $_POST['userName'];
				return $userName;
			} else {
				echo "No user name has been entered";
			}
		}
	}
	//Collect UserFirstName
	function collectUserFirstName() {
		if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
			if ( !is_null($_POST['firstName']) ) {
				$firstName = $_POST['firstName'];
				return $firstName;
			} else {
				echo "No first name has been entered";
			}
		}
	}
	//Collect UserLastName
	function collectUserLastName() {
		if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
			if ( !is_null($_POST['lastName']) ) {
				$lastName = $_POST['lastName'];
				return $lastName;
			} else {
				echo "No last name has been entered";
			}
		}
	}
	//Collect UserEmail
	function collectUserEmail() {
		if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
			if ( !is_null($_POST['userEmail']) ) {
				$email = $_POST['userEmail'];
				return $email;
			} else {
				echo "No email has been entered";
			}
		}
	}
	//Collect Password
	function collectUserPassword() {
		if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
			if ( !is_null($_POST['userPassword']) ) {
				$userPassword = $_POST['userPassword'];
				return $userPassword;
			} else {
				echo "No password has been entered";
			}
		}
	}
	//Collect DoB
	function collectUserDOB() {
		if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
			if ( !is_null($_POST['userDOB']) ) {
				$userDOB = $_POST['userDOB'];
				return $userDOB;
			} else {
				echo "No Date of Birth has been selected";
			}
		}
	}
	//Collect Gender
	function collectUserGender() {
		if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {
			if ( !is_null($_POST['gender']) ) {
				$gender = $_POST['gender'];
				return $gender;
			} else {
				echo "No gender has been selected";
			}
		}
	}
}

?>