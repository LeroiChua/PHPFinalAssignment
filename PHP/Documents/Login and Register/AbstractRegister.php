<?php
abstract class AbstractRegister implements IRegister 
{
	abstract public function collectUserName();
	abstract public function collectUserFirstName();
	abstract public function collectUserLastName();
	abstract public function collectUserEmail();
	abstract public function collectUserPassword();
	abstract public function collectUserDOB();
	abstract public function collectUserGender();
} 



?>