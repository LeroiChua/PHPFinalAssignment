<?php
abstract class AbstractLogin implements ILogin 
{
	//public function isValidLogin($email, $password);
	abstract function collectUserInput();
} 



?>