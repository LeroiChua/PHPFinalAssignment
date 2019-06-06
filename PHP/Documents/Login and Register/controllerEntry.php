<?php
class EntryController //extends AbstractEntryController 
{
	$login = new Login();
	$loginEmail;
	$loginPassword;
	
// 	$register = new Register();
// 	$registerUserName;
// 	$registerFirstName
// 	$registerLastName;
// 	$registerEmail;
// 	$registerPassword;
// 	$registerDOB;
// 	$registerGender;
	
	function collectLoginsData() {
		$login->collectUserInput();
		$loginEmail = $login->getEmail();
		$loginPassword = $login->getPassword();
	}
	
// 	function collectRegisterData() {
// 		$registerUserName = $register->collectUserName();
// 		$registerFirstName = $register->collectUserFirstName();
// 		$registerLastName = $register->collectUserLastName();
// 		$registerEmail = $register->collectUserEmail();
// 		$registerPassword = $register->collectUserPassword();
// 		$registerDOB = $register->collectUserDOB();
// 		$registerGender = $register->collectUserGender();
// 	}
	
}


?>
