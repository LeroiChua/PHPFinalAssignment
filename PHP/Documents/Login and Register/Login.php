<?php
class Login extends AbstractLogin
{
	private $email; //$userName
	private $password;
	
	/*function isValidLogin($email, $password)
	{
		$result = true;
		if ( $email == '' )
		{
			$result = false;
			echo "No email has been entered";
		}
		if ( $password == '' )
		{
			$result = false;
			echo "No password has been entered";
		}
		return result;
	}*/	
	
	function collectUserInput() 
	{
		if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
		{
			if ( !is_null($_POST['userEmail']) ) {
				$this->email = $_POST['userEmail'];
			} else {
				echo "No email has been entered";
			}
			
			if ( !is_null($_POST['userPassword']) ) {
				$this->password =$_POST['userPassword'];
			} else {
				echo "No password has been entered";
			}
		}
	}
	
	
	
	function getEmail()
	{
		
		return $this->email;
	}
	
	function getPassword() 
	{
		
		return $this->password;
	}
}


?>